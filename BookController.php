<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'book_name' => 'required|max:255',
            'isbn_no' => 'required|alpha_num',
            'book_price' => 'required|numeric',
        ]);

        $book = Book::create($validatedData);

        return redirect('/books')->with('success', 'Lưu thành công!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'book_name' => 'required | max:255',
            'isbn_no' => 'required |alpha_num',
            'book_price' => 'required | numeric',
        ]);

        Book::whereId($id)->update($validatedData);

        return redirect('/books')->with('success', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/books')->with('success', 'Xoa thanh cong!');
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Sử dụng Eloquent để tìm kiếm sách theo tên
        $books = Book::where('book_name', 'like', '%' . $searchTerm . '%')->get();

        return view('books.search', ['books' => $books,'searchTerm' => $searchTerm]);
    }
}
