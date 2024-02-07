<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        //add a new task fetching all the users from the database
        $users = User::all();
        return view('tasks.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Log the request information
        \Illuminate\Support\Facades\Log::info('Request data:', $request->all());

        // Validate the request
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required|exists:users,id' // Validate that the user_id exists in the users table
        ]);

        // Create a new task with the user_id
        $task = new Tasks();
        $task->fill($request->all());
        $task->save();

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
        $task = Tasks::find($id); // Retrieve the task by its ID
        return view('tasks.edit', compact('task')); // Pass the task to the view
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Tasks::find($id);
        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Tasks::find($id)->delete();
        //Session::flash('success', 'Task deleted successfully.');
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}
