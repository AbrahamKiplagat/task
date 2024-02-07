@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Edit Task</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="mx-auto w-1/2">
            @csrf
            @method('PUT')

            <!-- Add your form fields here -->
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Title</label>
                <input type="text" name="name" id="title" class="form-input mt-1 block w-full"
                    value="{{ $task->name }}">
            </div>
            <div class="mb-4">
                <label for="completed" class="block text-gray-700">Completed</label>
                <input type="hidden" name="completed" value="0">
                <input type="checkbox" name="completed" id="completed" class="form-checkbox mt-1 block" value="1"
                    {{ $task->completed ? 'checked' : '' }}>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="form-textarea mt-1 block w-full" rows="3">{{ $task->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Task</button>
        </form>
    @endsection
