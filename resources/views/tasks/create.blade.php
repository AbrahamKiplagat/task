<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tasks</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <div class="container mx-auto">
        <div class="mt-8">
            <h1 class="text-2xl font-bold mb-4">Add Task</h1>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="title" class="block text-gray-700">Title</label>
                    <input type="text" name="name" id="title" class="form-input mt-1 block w-full" required>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-gray-700">Description</label>
                    <textarea name="description" id="description" class="form-textarea mt-1 block w-full" required></textarea>
                </div>
                <!--Add user id-->
                <div class="mb-4">
                    <label for="user_id" class="block text-gray-700">User</label>
                    <select name="user_id" id="user_id" class="form-select mt-1 block w-full" required>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add
                        Task</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
