<?php

namespace App\Http\Controllers\States;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Users\tbl_state_user;
use App\Models\Pets\tbl_state_pet;
use App\Models\Dates\tbl_state_date;

use Exception;

class statesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
     
    // Read States
    public function statesIndex(){
        $statesUser = tbl_state_user::all();
        $statesPet = tbl_state_pet::all();
        $statesDate = tbl_state_date::all();

        return view('AdminViews\States\adminStates', compact('statesUser', 'statesPet', 'statesDate'));
    }


    // ---------------- States Pets -------------
    public function statesPetCreateIndex(){
        return view('AdminViews\States\statePetCrud');
    }
    // Create
    public function statesPetCreate(Request $request){
        try{
            $newStatePet = new tbl_state_pet;

            $newStatePet->state = $request->state;

            $newStatePet->save();

            return response()->json([
                'message'=>'Se ha creado el estado ' . $request->state . ' correctamente',
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
    public function statesPetEditIndex($id){
        $statePet = tbl_state_pet::findOrFail($id);

        return view('AdminViews\States\statePetEdit', compact('statePet'));
    }
    public function statesPetEdit(Request $request){
        
        try{
            $statepetUpdate = tbl_state_pet::findOrFail($request->id_state_pet);

            $statepetUpdate->state = $request->state;

            $statepetUpdate->save();
            
            return response()->json([
                'message'=>'Se ha actualizado el estado numero '. $request->id_state_pet . ' correctamente',
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
    public function statesPetDelete($id){
        try{
            $statePet = tbl_state_pet::findOrFail($id);

            $statePet->delete();
            
            return response()->json([
                'message'=>'Se ha eliminado correctamente el estado',
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

    
    // --------------- States Dates ------------------

    // Create
    public function statesDateCreateIndex(){
        return view('AdminViews\States\stateDateCrud');
    }
    public function statesDateCreate(Request $request){
        try{
            $newStateDate = new tbl_state_date;

            $newStateDate->state = $request->state;

            $newStateDate->save();
            return response()->json([
                'message'=>'Se ha creado el estado ' . $request->state . ' correctamente',
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
    public function statesDateEditIndex($id){
        $stateDate = tbl_state_date::findOrFail($id);

        return view('AdminViews\States\stateDateEdit', compact('stateDate'));
    }
    public function statesDateEdit(Request $request){
        try{
            $stateDate = tbl_state_date::findOrFail($request->id_state_date);

            $stateDate->state = $request->state;

            $stateDate->save();

            return response()->json([
                'message'=>'Se ha actualiazado el estado numero ' . $request->id_state_date . ' correctamente',
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
    public function statesDateDelete($id){
        try{
            $stateDate = tbl_state_date::findOrFail($id);
         
            $stateDate->delete();

            return response()->json([
                'message'=>'Se ha eliminado exitosamente el estado',
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



    // ---------------- States User -------------
    // Create state User index
    public function createStateUserIndex(){
        return view('AdminViews\States\stateUserCrud');
    }
    // Create state user post
    public function createStateUser(Request $request){
        $newStateUser = new tbl_state_user;

        try{

        $newStateUser->state = $request->state;

        $newStateUser->save();

        return response()->json([
            'message'=>'Se ha creado el estado ' . $request->state . ' correctamente.',
            'status'=>200
        ]);

        }catch(Exceptin $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>201,
                'error'=>$err
            ]);
        }
    }
    // Edit state user Index
    public function editStateUserIndex($id){
        $stateUser = tbl_state_user::findOrFail($id);

        return view('AdminViews\States\stateUserEdit', compact('stateUser'));
    }
    // editStateUser
    public function editStateUser(Request $request){
        
        try{
            $editStateUser = tbl_state_user::findOrFail($request->id_state_user);
            
            $editStateUser->state = $request->state;

            $editStateUser->save();
    
            return response()->json([
                'message'=>'El estado numero ' . $request->id_state_user . ' ha sido actualizado',
                'status'=>200
            ]);
        }

        catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un erro',
                'status'=>404,
                'error'=>$err
            ]);
        }
    }

    // Delete state user
    public function deleteStateUser($id){

        
        $stateUser = tbl_state_user::findOrFail($id);

        try{
            $stateUser->delete();
            return response()->json([
                'message'=>'Se ha eliminado correctamente el estado',
                'status'=>200
            ]);
        }catch(Exception $err){
            return response()->json([
                'message'=>'Ha ocurrido un error',
                'status'=>200,
                'erroe'=>$err
            ]);
        }


    }




}
