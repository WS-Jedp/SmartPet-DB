<?php

namespace App\Http\Controllers\Medicaments;

use App\Http\Controllers\Controller;
use App\Models\Medicaments\pet_has_medicament;
use Illuminate\Http\Request;

use App\Models\Medicaments\tbl_medicament;
use App\Models\Medicaments\type_pet_has_medicament;

use App\Models\Pets\tbl_type_pet;
use Exception;
use Illuminate\Support\Facades\DB;

class medicamentsController extends Controller
{
    // ------------- Medicaments 
    // Index
    public function medicamentsIndex(){
        $medicaments = tbl_medicament::all();
        return view('AdminViews\Medicaments\adminMedicaments', compact('medicaments'));
    }
    // Create
    public function medicamentCreateIndex(){
        $typesPet = tbl_type_pet::all();
        return view('AdminViews\Medicaments\medicamentsCrud', compact('typesPet'));
    }
    public function medicamentCreate(Request $request){
        try{
            DB::beginTransaction();

            $medicament = new tbl_medicament;

            $medicament->name = $request->name;
            $medicament->quantity = $request->quantity;
            $medicament->description = $request->description;
            $medicament->inventory = $request->inventory;
            $medicament->save();

            for($i=0; $i < count($request->id_type_pet); $i++){
                $typePetHasMedicament = new type_pet_has_medicament;
                $typePetHasMedicament->id_type_pet = $request->id_type_pet[$i];
                $typePetHasMedicament->id_medicament = $medicament->id_medicament;
                $typePetHasMedicament->save();
            }

            return response()->json([
                'message'=>'Se ha creado el medicamento ' . $request->name . ' correctamente',
                'status'=>200 
            ]);
        }catch(Exception $err){
            DB::rollBack();
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }
    // Edit
    public function medicamentEditIndex($id){
        $medicament = tbl_medicament::findOrFail($id);
        $typesPet = tbl_type_pet::all();
        $typePetHasMedicaments = type_pet_has_medicament::select('tbl_medicaments.*', 'type_pet_has_medicaments.*')->join('tbl_medicaments', 'tbl_medicaments.id_medicament', '=', 'type_pet_has_medicaments.id_medicament')->where('tbl_medicaments.id_medicament', $id)->get();
        
        return view('AdminViews\Medicaments\medicamentsEdit', compact('medicament', 'typesPet', 'typePetHasMedicaments'));
    }
    public function medicamentEdit(Request $request){
        DB::beginTransaction();
        try{
            $medicament = tbl_medicament::findOrFail($request->id_medicament);
            $typePetHasMedicament = type_pet_has_medicament::select('type_pet_has_medicament.*')->where('type_pet_has_medicament.id_medicament',$request->id_medicament);

            $medicament->name = $request->name;
            $medicament->quantity = $request->quantity;
            $medicament->inventory = $request->inventory;
            $medicament->description = $request->description;

            $typePetHasMedicament->id_type_pet = $request->id_type_pet;

        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }
}
