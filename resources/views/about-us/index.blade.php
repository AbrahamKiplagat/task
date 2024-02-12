<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>About Task Manager</title>
</head>

<body class="bg-gray-100">
    @include('welcome')
    {{-- <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="#" class="text-xl font-bold">Task Manager</a>
        </div>
    </nav> --}}

    <div class="container mx-auto mt-0">
        <div class="bg-white p-8 rounded shadow-lg">
            <h1 class="text-4xl font-bold mb-4 text-gray-800">About Task Manager</h1>
            <p class="text-gray-600">
                Welcome to Task Manager - the app that helps you organize your tasks efficiently.
            </p>
            <p class="text-gray-600">
                Task Manager provides a simple and intuitive interface for managing your tasks, allowing you to stay
                organized and focused on what matters most. Whether you're a student, professional, or anyone with
                tasks to accomplish, Task Manager is here to simplify your workflow.
            </p>
            <h2 class="mt-6 text-2xl font-bold">Key Features:</h2>
            <ul class="list-disc list-inside text-gray-600">
                <li>Easy task creation and management</li>
                <li>Prioritize tasks based on importance and urgency</li>
                <li>Mark tasks as completed</li>
                <li>Organize tasks by categories or projects</li>
                <li>Responsive and user-friendly design</li>
            </ul>
            <h2 class="mt-6 text-2xl font-bold">How to Get Started:</h2>
            <ol class="list-decimal list-inside text-gray-600">
                <li>Create an account or log in if you already have one.</li>
                <li>Add your tasks, providing details such as due dates and priorities.</li>
                <li>Organize tasks into categories or projects for better management.</li>
                <li>Mark tasks as completed when finished.</li>
                <li>Stay productive and achieve your goals!</li>
            </ol>
            <p class="text-center mt-8">
                <a href="{{route('register') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Get Started</a>
            </p>
        </div>
    </div>

</body>

</html>
