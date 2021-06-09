<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
//     //get user berdasarkan id
// public function getFoodById($id){
//     //temukan id
//     $foods = Food::find($id);
//     return response()->json(compact('foods'), 200);
// }


//     //get all user
// public function getAllFoods(){
//     $foods = Food::all();
//     return response()->json(compact('foods'), 200);
// }

// //create user
// public function createFood(Request $request)
// {
//     $input = $request->all();

//     $foods = new Food();
//     $foods->name = $input['name'];
//     $foods->email = $input['price'];
//     $foods->detail = $input['detail'];

//     //save untuk menyimpan data ke database
//     $foods->save();
//     return response()->json(compact('foods'), 200);
// }

// //update user
// public function updateFood($id, Request $request)
// {
//     //cari user id
//     $foods = Food::find($id);
//     $input = $request->all();

    
//     $foods->name = $input['name'];
//     $foods->email = $input['price'];
//     $foods->detail = $input['detail'];

//     //save untuk menyimpan data ke database
//     $foods->save();
//     return response()->json(compact('food'), 200);
// }

// //delete user
// public function deleteFood($id){
//     $foods = Food::find($id);
//     $foods->delete();

//     $status = "delete success";
//     return response()->json(compact('status'), 200);
// }
}
