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


                @forelse ($tasks as $task)
                    <tr>
                        <td class="px-4 py-2">{{ $task->name }}</td>
                        <td class="px-4 py-2">
                            <!--log the task completed value-->
                            @php
                                Log::info($task->completed);
                            @endphp
                            <!--Escaped the php values-->
                            {{ $task->completed ? 'Done' : 'Not Done' }}
                        </td>
                        <td class="px-4 py-2">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                            <button
                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
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
