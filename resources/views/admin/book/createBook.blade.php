@extends('layout.master')
@section('content')
    <h1>Thêm Sách Mới</h1>
    <form action="{{ url('admin/book/storeBook') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="author">Tác giả</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <!-- Thêm các trường thông tin khác của sách (nếu có) -->
        <button type="submit" class="btn btn-primary">Thêm Sách</button>
    </form>
@endsection