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

    public function usersIndex(){
        return view('AdminViews\Users\adminUsers');
    }
    public function userCreate(){
        return view('AdminViews\Users\usersCrud');
    }
    public function createType(Request $request){

        $newTypeUser = new tbl_type_user;

        $newTypeUser->type = $request->type;

        $newTypeUser->save();
    }
}
