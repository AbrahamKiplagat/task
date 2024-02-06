<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      //select * from tasks;
        $tasks = Tasks::all(); // Retrieve all tasks from the database
        //$tasks = Tasks::where('completed', 0)->get(); 
        //$tasks = Tasks::orderBy('created_at', 'desc')->get(); // Retrieve tasks ordered by creation date in descending order
        //$tasks = Tasks::limit(10)->get(); // Retrieve only the first 10 tasks
        //$tasks = Tasks::select('name', 'description')->get(); // Retrieve only specific columns from the tasks table
        //$tasks = Tasks::with('user')->get(); // Retrieve tasks with their associated user (assuming there is a relationship defined)
        // Retrieve only the tasks that are not completed and order them by creation date in descending order
        //$tasks = Tasks::where('completed', 0)->orderBy('created_at', 'desc')->get(); 
        
        return view('tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //all the code in the create method is to return the view for creating a new task
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
       //create a new task
        Tasks::create($request->all());

        return redirect()->route('tasks.index')->with('success', 'Task created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //find the task by id
        try {
            $task = Tasks::findOrFail($id);
            return view('tasks.show',compact('task'));
        } catch (\Exception $e) {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('tasks.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        Tasks::find($id)->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        Tasks::find($id)->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}