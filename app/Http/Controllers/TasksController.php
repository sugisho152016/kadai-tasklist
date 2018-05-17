<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tasklist; 

class TasksController extends Controller
{
    public function index(){
        $tasks = Tasklist::all();

        return view('tasks.index', [
            'tasks' => $tasks,
              ]);   
    }
    
    public function create()
    {
        $task = new Tasklist;

        return view('tasks.create', [
            'task' => $task,
        ]);
    }
    public function store(Request $request)
    {
        $task = new Tasklist;
        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
    
    public function edit($id)
    {
        $task = Tasklist::find($id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }
    public function update(Request $request, $id)
    {
        $task = Tasklist::find($id);
        $task->content = $request->content;
        $task->save();

        return redirect('/');
    }
    public function destroy($id)
    {
        $task = Tasklist::find($id);
        $task-> delete();

        return redirect('/');
    }
       public function show($id)
    {
        $task = Tasklist::find($id);

        return view('tasks.show', [
            'task' => $task,
        ]);
    }
}
