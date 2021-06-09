<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //get user berdasarkan id
public function getUserById($id){
    //temukan id
    $users = User::find($id);
    return response()->json(compact('users'), 200);
}


    //get all user
public function getAllUsers(){
    $users = User::all();
    return response()->json(compact('users'), 200);
}

//create user
public function createUser(Request $request)
{
    $input = $request->all();

    $user = new User();
    $user->name = $input['name'];
    $user->email = $input['email'];
    $user->password = Hash::make($input['password']);

    //save untuk menyimpan data ke database
    $user->save();
    return response()->json(compact('user'), 200);
}

//update user
public function updateUser($id, Request $request)
{
    //cari user id
    $user = User::find($id);
    $input = $request->all();

    
    $user->name = $input['name'];
    $user->email = $input['email'];
    $user->password = Hash::make($input['password']);

    //save untuk menyimpan data ke database
    $user->save();
    return response()->json(compact('user'), 200);
}

//delete user
public function deleteUser($id){
    $user = User::find($id);
    $user->delete();

    $status = "delete success";
    return response()->json(compact('status'), 200);
}
}
