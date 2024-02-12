<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $task->title }}
        </h2>
    </x-slot>

    <div class="container mx-auto mt-8">
        <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
            <h1 class="text-2xl font-bold mb-4">{{ $task->name }}</h1>

            <p class="text-gray-600 mb-4">{{ $task->description }}</p>

            <div class="flex justify-between w-full">
                <div>
                    <p class="text-gray-600">User: {{ $task->user->name }}</p>
                    <p class="text-gray-600">Created at: {{ $task->created_at->format('F j, Y H:i') }}</p>
                    <p class="text-gray-600">Updated at: {{ $task->updated_at->format('F j, Y H:i') }}</p>
                </div>

                <div class="ml-4">
                    <a href="{{ route('tasks.edit', $task->id) }}"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit Task</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
