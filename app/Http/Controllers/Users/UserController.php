<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Users\tbl_type_user;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

// Types of user
    public function usersIndex(){

        $typesUser = tbl_type_user::all();

        return view('AdminViews\Users\adminUsers', compact('typesUser'));
    }
    // Create
    public function userCreate(){
        return view('AdminViews\Users\usersCrud');
    }
    public function createType(Request $request){

        $newTypeUser = new tbl_type_user;

        $newTypeUser->type = $request->type;

        $newTypeUser->save();

        return response()->json([
            'message'=>'Se ha creado el nuevo tipo ' . $request->type . ' correctamente',
            'status'=> 200,
        ]);
    }
    // Update
    public function userEdit($id_type_user){

        $typeUser = tbl_type_user::where('id_type_user', $id_type_user)->first();

        return view('AdminViews\Users\usersEdit', compact('typeUser'));
        
    }
    public function userUpdate(Request $request){
        
        $updateTypeUser = tbl_type_user::where('id_type_user', (int)$request->id_type_user )->first();
        
        $updateTypeUser->type = $request->type;
        
        
        $updateTypeUser->save();

        return response()->json([
            'message'=>'El tipo de usuario numero ',
            'status'=>200
        ]);

    }


// ----------- Subcriptions for users
    public function subscriptionsIndex(){
        return view('AdminViews\Subscriptions\adminSubscriptions');
    }


}
