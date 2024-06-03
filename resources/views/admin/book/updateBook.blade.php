@extends('layout.master')
@section('content')
    <h1>Chỉnh Sửa Sách</h1>
    <form action="{{ url('admin/book/updateBook', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}" required>
        </div>
        <div class="form-group">
            <label for="author">Tác giả</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}" required>
        </div>
        <!-- Chỉnh sửa các trường thông tin khác của sách (nếu có) -->
        <button type="submit" class="btn btn-primary">Cập Nhật Sách</button>
    </form>
@endsection