<?php

namespace App\Http\Controllers;

use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('book');
    }
    public function login()
    {
        $name = "Do Dang Cong!";
        return view('login')->with('name',$name);
    }
    public function getBooks()
    {
        $books = BookModel::all();
        return view('admin.book.getBooks', ['books' => $books]);
    }
    public function createBook()
    {
        return view('admin.book.createBook');
    }
    public function storeBook(Request $request)
    {
        $book = new BookModel();
        $book->title = $request->title;
        $book->author = $request->author;
        // Lưu các thông tin khác của sách
        $book->save();
        return redirect('admin/book/getBooks')->with("Note", "Thêm sách thành công!");
    }
    public function editBook($bookId)
    {
        $book = BookModel::find($bookId);
        return view('admin.book.updateBook', ['book' => $book]);
    }
    public function updateBook(Request $request, $bookId)
    {
        $book = BookModel::find($bookId);
        $book->title = $request->title;
        $book->author = $request->author;
        // Cập nhật các thông tin khác của sách
        $book->save();
        return redirect('admin/book/getBooks')->with("Note", "Cập nhật sách thành công!");
    }
    public function deleteBook($bookId)
    {
        $book = BookModel::find($bookId);
        $book->delete();
        return redirect('admin/book/getBooks')->with("Note", "Xóa sách thành công!");
    }
}
