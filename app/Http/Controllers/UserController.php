<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getProfile($id){
        return User::find($id)->profile;
    }
    public function getUserTasks($id){
        return User::find($id)->tasks;
    }
}
