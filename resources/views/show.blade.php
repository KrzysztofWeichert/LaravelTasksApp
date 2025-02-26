@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div class="mb-4">
        <a class="btn2"
            href="{{ route('tasks.index') }}">Go to
            list</a>
    </div>

    <p class="mb-4 text-slate-300">{{ $task->description }}</p>
    @if ($task->long_description)
        <p class="mb-4 text-slate-300">{{ $task->long_description }}</p>
    @endif

    <p class="mb-4 text-sm text-slate-400">Created: {{ $task->created_at->diffForHumans() }} • Updated:
        {{ $task->updated_at->diffForHumans() }}</p>

    <p class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-400">Completed ✓</span>
        @else
            <span class="font-medium text-red-600">Not completed ✕</span>
        @endif
    </p>

    <div class="flex gap-2">
        <a class="btn" href="{{ route('tasks.edit', ['task' => $task]) }}/">Edit</a>

        <form action="{{ route('tasks.toggle-complete', ['task' => $task]) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn cursor-pointer">
                Mark as {{ $task->completed ? 'not completed' : 'completed' }}
            </button>
        </form>

        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn cursor-pointer">Delete</button>
        </form>
    </div>
@endsection
