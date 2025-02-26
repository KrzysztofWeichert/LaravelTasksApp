@extends('layouts.app')
@section('title', 'Tasks list')

@section('content')
    <nav class="mb-4">
        <a class="btn2" href="{{ route('tasks.create') }}">Add Task</a>
    </nav>

    <div>
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                    @class(['hover:text-slate-400','line-through' => $task->completed])>{{ $task->title }} </a>
            </div>
        @empty
            <div>There are no tasks</div>
        @endforelse

        @if ($tasks->count())
            <nav class="mt-4">
                {{ $tasks->links() }}
            </nav>
        @endif
    </div>
@endsection
