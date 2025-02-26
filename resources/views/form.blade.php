@extends('layouts.app')

@section('title', isset($task) ? 'Edit task' : 'Create task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form method="post" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <label for="title">
            Title
        </label>
        <input type="text" name="title" id="title" @class(['border-red-500!' => $errors->has('title')])
            value={{ $task->title ?? old('title') }}>
        @error('title')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="description">
            description
        </label>
        <textarea name="description" id="description" rows="5" @class(['border-red-500!' => $errors->has('description')])>{{ $task->description ?? old('title') }}</textarea>
        @error('description')
            <p class="error">{{ $message }}</p>
        @enderror

        <label for="long_description">
            Long description
        </label>

        <textarea name="long_description" id="long_description" rows="10" @class(['border-red-500!' => $errors->has('long_description')])>{{ $task->long_description ?? old('title') }}</textarea>
        @error('long_description')
            <p class="error">{{ $message }}</p>
        @enderror

        <button type="submit" class="btn cursor-pointer">
            @isset($task)
                Edit task
            @else
                Create task
            @endisset
        </button>
        <a href="{{ route('tasks.index') }}"><button class='btn cursor-pointer'>Go to list</button></a>
    </form>
@endsection
