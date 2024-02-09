@extends('layouts.app')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-4">Tasks</h1>
        <div class="flex justify-between mb-4">
            <div>
                <input type="text" class="border border-gray-300 p-2" placeholder="Search tasks">
            </div>
            <!-- Add a link to the create route using mustache syntax -->
            <a href="{{ route('tasks.create') }}"
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Add Task</a>
        </div>
        <table class="table-auto mx-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- @if (isset($tasks))
                    @foreach ($tasks as $task)
                        <tr>
                            <td class="px-4 py-2">{{ $task->name }}</td>
                            <td class="px-4 py-2">
                                @if ($task->completed)
                                    <span class="bg-green-500 text-white font-bold py-1 px-2 rounded">Done</span>
                                @else
                                    <span class="bg-red-500 text-white font-bold py-1 px-2 rounded">Not Done</span>
                                @endif
                            </td>
                            <td class="px-4 py-2">
                                <a href="{{ route('tasks.show', $task->id) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show</a>
                                <button
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="px-4 py-2" colspan="3">No tasks found</td>
                    </tr>
                @endif  --}}

                <!-- use a forelse loop to iterate through the tasks and display them in a table -->
                @forelse ($tasks as $task)
                    <tr>
                        <td class="px-4 py-2">{{ $task->name }}</td>
                        <td class="px-4 py-2">
                            <!--log the task completed value-->
                            {{-- @php
                                Log::info($task->completed);
                            @endphp
                            <!--Escaped the php values--> --}}
                            {{-- @if ($task->completed)
                                <span class="bg-green-500 text-white font-bold py-1 px-2 rounded">Done</span>
                            @else
                                <span class="bg-red-500 text-white font-bold py-1 px-2 rounded">Not Done</span>
                                
                            @endif --}}
                            <!-- Tenary operator to check if the task is completed or not -->

                            {{ $task->completed ? 'Done' : 'Not Done' }}
                        </td>
                        <td class="px-4 py-2">
                            <a href="{{ route('tasks.show', $task->id) }}"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show</a>


                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="showDeleteToast()"
                                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                            </form>

                            <script>
                                function showDeleteToast() {
                                    toastr.success('Task deleted successfully!');
                                }
                            </script>




                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="px-4 py-2" colspan="3">No tasks found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection('content')
