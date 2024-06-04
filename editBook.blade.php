@extends('layouts.master')
@section('content')
    <h1>Sửa Sách</h1>
    <form action="{{ url('admin/book/updateBook', $book->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Tác giả</label>
            <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea name="description" id="description" class="form-control" required>{{ $book->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>
@endsection