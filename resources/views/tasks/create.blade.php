@extends('layouts.app')

@section('content')
<div class="container">
    <h2>タスクを追加</h2>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">タイトル</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">説明</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
            <label for="completed">タスク状況</label>
            <select class="form-control" id="completed" name="completed">
                <option value="0">未完了</option>
                <option value="1">完了</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">追加</button>
    </form>
</div>
@endsection

        
