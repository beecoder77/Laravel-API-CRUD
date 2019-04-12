<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(request $request)
    {
        $book = new Book;
        $book->judul = $request->judul;
        $book->pengarang = $request->pengarang;
        $book->kategori = $request->kategori;
        $book->tahunTerbit = $request->tahunTerbit;
        $book->penerbit = $request->penerbit;
        $book->save();

        return "Data berhasil Masuk";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $judul = $request->judul;
        $pengarang = $request->pengarang;
        $kategori = $request->kategori;
        $tahunTerbit = $request->tahunTerbit;
        $penerbit = $request->penerbit;

        $book = Book::find($id);
        $book->judul = $judul;
        $book->pengarang = $pengarang;
        $book->kategori = $kategori;
        $book->tahunTerbit = $tahunTerbit;
        $book->penerbit = $penerbit;

        $book->save();

        return "Data Berhasil di Update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function delete(request $request, $id)
    {
        $book = Book::find($id);
        $book->delete();

        return "Data Berhasil di Hapus";
    }
}
