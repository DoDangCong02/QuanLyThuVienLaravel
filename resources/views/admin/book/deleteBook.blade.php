@extends('layout.master')
@section('content')
    <h1>Xóa Sách</h1>
    <p>Bạn có chắc chắn muốn xóa sách này?</p>
    <form action="{{ url('admin/book/deleteBook', $book->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Xóa</button>
    </form>
@endsection