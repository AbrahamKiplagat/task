<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="antialiased bg-gray-100">

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
                            @php
                                Log::info($task->completed);
                            @endphp
                            <!--Escaped the php values-->
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


                            <!-- Add a button to trigger the delete confirmation modal -->
                            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                onclick="showDeleteConfirmation({{ $task->id }})">Delete</button>
                        </td>

                        <!-- Add a modal for delete confirmation -->
                        <div id="deleteConfirmationModal"
                            class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
                            <div class="bg-white p-4 rounded">
                                <p>Are you sure you want to delete this task?</p>
                                <div class="flex justify-end mt-4">
                                    <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                                        onclick="deleteTask({{ $task->id }})">Yes</button>
                                    <button
                                        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2"
                                        onclick="hideDeleteConfirmation()">No</button>
                                </div>
                            </div>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

                        <script>
                            function showDeleteConfirmation(taskId) {
                                // Show the delete confirmation modal
                                document.getElementById('deleteConfirmationModal').classList.remove('hidden');
                            }

                            function hideDeleteConfirmation() {
                                // Hide the delete confirmation modal
                                document.getElementById('deleteConfirmationModal').classList.add('hidden');
                            }


                            function deleteTask(id) {
                                // Perform the delete operation using Axios
                                axios.delete(`/tasks/${id}`)
                                    .then(response => {
                                        // Handle the success response
                                        console.log(response.data);
                                        // Reload the page after successful deletion
                                        location.reload();
                                    })
                                    .catch(error => {
                                        // Handle the error response
                                        console.error(error);
                                    });
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

</body>

</html>
