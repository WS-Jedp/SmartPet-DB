<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Users\tbl_type_user;
use App\Models\Users\tbl_subscription;

class UserController extends Controller
{
    //

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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

    // Delete
    public function deleteType($id){
        $typeUserDelete = tbl_type_user::findOrFail($id);

        $typeUserDelete->delete();

        return response()->json([
            'message'=>'El tipo de usuario ha sido eliminado correctamente',
            'status'=>200
        ]);
    }


// ----------- Subcriptions for users ---------------
    public function subscriptionsIndex(){
        $subscriptions = tbl_subscription::all();

        return view('AdminViews\Subscriptions\adminSubscriptions', compact('subscriptions'));
    }

    public function subscriptionCreateIndex(){
        return view('AdminViews\Subscriptions\subscriptionsCRUD');
    }
    public function subscriptionCreate(Request $request){
        $newSubscription = new tbl_subscription;

        $newSubscription->subscription = $request->subscription;
        $newSubscription->price = $request->price;

        $newSubscription->save();

        return response()->json([
            'message'=>'Se ha creado correctamente la subscripcion ' . $request->subscription,
            'status'=>200
        ]);
    }

    // Edit subscription
    public function subscriptionEdit($id){

        $subscription = tbl_subscription::findOrFail($id);

        return view('AdminViews\Subscriptions\subscriptionEdit', compact('subscription'));
        
    }
    public function subscriptionDelete(Request $request){
        
        $editSubscription = tbl_subscription::findOrFail($request->id_subscription);

        $editSubscription->subscription = $request->subscription;
        $editSubscription->price = $request->price;

        $editSubscription->save();

        return response()->json([
            'message'=>'La subscripcion numero ' . $editSubscription->id_subscription . ' ha sido renovada',
            'status'=>200
        ]);
    }

    // Delete subscription
    public function deleteSubscription($id){
        $deleteSubscription = tbl_subscription::findOrFail($id);

        $deleteSubscription->delete();

        return response()->json([
            'message'=>'Se ha eliminado correctamente la subscripcion',
            'status'=>200
        ]);
    }


}
