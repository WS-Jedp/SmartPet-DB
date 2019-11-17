<?php

namespace App\Http\Controllers\Vaccines;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Vaccines\tbl_vaccine;
use App\Models\Vaccines\type_pet_has_vaccine;

use App\Models\Pets\tbl_type_pet;
use Exception;
use Illuminate\Support\Facades\DB;

class vaccinesController extends Controller
{
    // Read
    public function vaccinesIndex(){
        $vaccines = tbl_vaccine::all();
        return view('AdminViews\Vaccines\adminVaccines', compact('vaccines'));
    }
    // Create
    public function createVaccineIndex(){
        $typesPet = tbl_type_pet::all();
        return view('AdminViews\Vaccines\vaccinesCrud', compact('typesPet'));
    }
    public function createVaccine(Request $request){
        DB::beginTransaction();
        try{
            $vaccine = new tbl_vaccine;
            $vaccine->vaccine = $request->vaccine;
            $vaccine->description = $request->description;
            $vaccine->how_often = $request->how_often;
            $vaccine->save();

            for($i=0;$i<count($request->id_type_pet);$i++){
                $typePetHasVaccine = new type_pet_has_vaccine;
                $typePetHasVaccine->id_vaccine = $vaccine->id_vaccine;
                $typePetHasVaccine->id_type_pet = $request->id_type_pet[$i];
                $typePetHasVaccine->save();
            }

            return response()->json([
                'message'=>'Se ha guardado la vacuna ' . $request->vaccine . ' correctamente',
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
    public function editVaccineIndex($id){
        $vaccine = tbl_vaccine::findOrFail($id);

        return view('AdminViews\Vaccines\vaccinesEdit', compact('vaccine'));
    }
    public function editVaccine(Request $request){
        try{
            $vaccine = tbl_vaccine::findOrFail($request->id_vaccine);
            $vaccine->vaccine = $request->vaccine;
            $vaccine->how_often = $request->how_often;
            $vaccine->description = $request->description;
            $vaccine->save();

            return response()->json([
                'message'=>'Se ha actualizado la vacuna numero ' . $request->id_vaccine . ' correctamente',
                'status'=>200
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }


    // Delete
    public function deleteVaccine($id){
        DB::beginTransaction();
        try{
            $vaccine = tbl_vaccine::findOrFail($id);
            $typePetVaccine = type_pet_has_vaccine::where('type_pet_has_vaccines.id_vaccine', $id)->get();
    
            $vaccine->delete();
    
            for($i=0; $i < count($typePetVaccine); $i++){
                $typePetVaccine[$i]->delete();
            }

            return response()->json([
                'message'=>'Se han eliminado los datos correctamente',
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

}
