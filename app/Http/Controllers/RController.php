<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class RController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $tasks = Task::all();
        return response()->json($tasks,"200");
    }
    public function store(StoreTaskRequest $request){
       $task = Task::create($request->all());
        return response()->json($task,200);
    }
    public function update(Request $request, $id){
        $task = Task::findOrFail($id);
        $task->update( $request->all());
        return response()->json($task,201);
    }
    public function show($id){
        $task = Task::findOrFail($id);
        return response()->json($task,200);
    }
    public function destroy($id){
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json($task,204);

    }
}
