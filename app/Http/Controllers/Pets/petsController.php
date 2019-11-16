<?php

namespace App\Http\Controllers\Pets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pets\tbl_type_pet;
use App\Models\Pets\tbl_gender_pet;
use App\Models\Pets\tbl_race_pet;

use Exception;

class petsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

// ------------ Types pet --------------------

    public function petsIndex(){

        $typesPet = tbl_type_pet::all();
        $gendersPet = tbl_gender_pet::all();
        $racesPet = tbl_race_pet::all();

        return view('AdminViews\Pets\adminPets', compact('typesPet', 'gendersPet', 'racesPet'));
    }
    // Create
    public function createTypeIndex(){

        return view('AdminViews\Pets\petTypeCrud');
    }
    public function createType(Request $request){
        try{
            $typePet = new tbl_type_pet;

            $typePet->type = $request->type;

            $typePet->save();

            return response()->json([
                'message'=>'Se ha creado correctamente el tipo ' . $request->type,
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
    // Edit
    public function editTypeIndex($id){
        $typePet = tbl_type_pet::findOrFail($id);

        return view('AdminViews\Pets\petTypeEdit', compact('typePet'));
    }
    public function editType(Request $request){
        try{
            $typePet = tbl_type_pet::findOrFail($request->id_type_pet);
            $typePet->type = $request->type;
            $typePet->save();

            return response()->json([
                'message'=>'Se ha actualizado correctamente el tipo numero ' . $request->id_type_pet,
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
    public function deleteType($id){
        try{
            $typePet = tbl_type_pet::findOrFail($id);
            $typePet->delete();
            
            return response()->json([
                'message'=>'Se ha elimiado correctamente el tipo de mascota',
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

    // ---------- Genders pets -------
    public function createGenderIndex(){   
        return view('AdminViews\Pets\petGenderCrud');
    }
    // Create
    public function createGender(Request $request){
        try{
            $genderPet = new tbl_gender_pet;

            $genderPet->gender = $request->gender;
    
            $genderPet->save();
    
            return response()->json([
                'message'=>'Se ha creado el genero ' . $request->gender . ' correctamente',
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
    // Edit
    public function editGenderIndex($id){
        $genderPet = tbl_gender_pet::findOrFail($id);

        return view('AdminViews\Pets\petGenderEdit', compact('genderPet'));
    }
    public function editGender(Request $request){
        try{
            $genderPet = tbl_gender_pet::findOrFail($request->id_gender_pet);
            $genderPet->gender = $request->gender;
            $genderPet->save();
    
            return response()->json([
                'message'=>'Se ha actualizado el genero numero ' . $request->id_gender_pet . ' correctamene',
                'status'=>200
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=> $err
            ]);
        }
    }
// Delete
    public function deleteGender($id){
        try{
            $genderPet = tbl_gender_pet::findOrFail($id);

            $genderPet->delete();

            return response()->json([
            'message'=>'Se ha eliminado correctamente el genero',
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

    // ------------ Races ------------
    // Create
    public function createRacesIndex(){

        $typesPet = tbl_type_pet::all();

        return view('AdminViews\Pets\petRaceCrud', compact('typesPet'));
    }
    public function createRaces(Request $request){
        try{
            $racePet = new tbl_race_pet;
            $racePet->id_type_pet = $request->id_type_pet;
            $racePet->race = $request->race;
            $racePet->save();

            return response()->json([
                'message'=>'Se ha guardado la raza ' . $request->race . ' correctamente',
                'status'=>200,
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }
    // Edit
    public function editRacesIndex($id){
        $racePet = tbl_race_pet::findOrFail($id);
        $typesPet = tbl_type_pet::all();
        return view('AdminViews\Pets\petRacesEdit', compact('racePet', 'typesPet'));
    }
    public function editRaces(Request $request){
        try{
            $racePet = tbl_race_pet::findOrFail($request->id_race_pet);
            $racePet->race = $request->race;
            $racePet->id_type_pet = $request->id_type_pet;
            $racePet->save();

            return response()->json([
                'message'=>'Se ha actualizado la raza numero ' . $request->id_race_pet . ' correctamente',
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
    public function deleteRace($id){
        $racePet = tbl_race_pet::findOrFail($id);
        $racePet->delete();
        return response()->json([
            'message'=>'Se ha eliminado la raza correctamente',
            'status'=>200
        ]);
    }








    
}
