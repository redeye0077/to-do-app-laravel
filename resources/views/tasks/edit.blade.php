@extends('layouts.app')

@section('content')
<div class="container">
    <h2>タスク編集</h2>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">説明</label>
            <textarea class="form-control" id="description" name="description" required>{{ $task->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="completed">タスク状況</label>
            <select class="form-control" id="completed" name="completed">
                <option value="0" {{ $task->completed == 0 ? 'selected' : '' }}>未完了</option>
                <option value="1" {{ $task->completed == 1 ? 'selected' : '' }}>完了</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">更新</button>
    </form>
</div>
@endsection
