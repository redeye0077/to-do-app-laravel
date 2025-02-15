@extends('layouts.app')

@section('content')
<div class="container">
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h2>タスク一覧</h2>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary">タスクを追加</a>

    @if($tasks->count())
        <ul class="list-group mt-3">
            @foreach($tasks as $task)
                <li class="list-group-item">
                    <h4>{{ $task->title }}</h4>
                    <p>{{ $task->description }}</p>
                    <p>{{ $task->completed ? '完了' : '未完了' }}</p>
                    <small>作成日: {{ $task->created_at->format('Y-m-d H:i') }}</small>
                    <br>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">編集</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('本当に削除しますか？')">削除</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p class="mt-3">タスクがありません。</p>
    @endif
</div>
@endsection
