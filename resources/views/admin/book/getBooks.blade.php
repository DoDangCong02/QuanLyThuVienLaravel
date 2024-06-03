@extends('layout.master')
@section('content')
    <h1>Danh sách Sách</h1>
    @if (session('Note'))
        <div class="alert alert-success">
            {{ session('Note') }}
        </div>
    @endif
    <a href="{{ url('admin/book/createBook') }}" class="btn btn-primary">Thêm Sách Mới</a>
    <table class="table mt-3">
        <thead>
        <tr>
            <th>Tiêu đề</th>
            <th>Tác giả</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>
                    <a href="{{ url('admin/book/editBook', $book->id) }}" class="btn btn-sm btn-primary">Chỉnh sửa</a>
                    <form action="{{ url('admin/book/deleteBook', $book->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa sách này?')">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection