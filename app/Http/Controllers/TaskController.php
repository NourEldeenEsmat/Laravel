<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return response()->json($tasks,"200");
    }
    public function store(Request $request){
        $request->validate([
            "title"=>'required|string|max:40',
            "description"=>'nullable|string',
            "priority"=>'required|integer|min:1|max:4'

        ]);
       $task = Task::create($request->all());
        return response()->json($task,200);
    }
    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update( $request->all());
        return response()->json($task,201);
    }
    public function findById($id){
        $task = Task::findOrFail($id);
        return response()->json($task,200);
    }
    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json($task,204);

    }
}
