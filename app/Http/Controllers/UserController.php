<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index($id){
        $users = [  ['id'=>1,'name'=>"nour"],['id'=>2,'name'=>"omar"]];
        // foreach($users as $user){
        //     echo $user["id"];
        // }
        return response()->json(['messege'=>$id]);
    }
}
