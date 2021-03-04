<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Book;

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
        
        return view('pages.admin.book.index', [
            'books' => $books
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $number = Book::count();

        // $book = Book::all();
        if($number > 0) {
            $number = Book::max('book_code');
            $strnum = substr($number, 2, 3);
            $strnum = $strnum + 1;
            if(strlen($strnum) == 3) {
                $kode = 'BK' . $strnum;
            } else if (strlen($strnum) == 2) {
                $kode = 'BK' . "0" . $strnum;
            } else if (strlen($strnum) == 1) {
                $kode = 'BK' . "00". $strnum;
            }
        } else {
            $kode = 'BK' . "001";
        }

        return view('pages.admin.book.create', [
            'kode' => $kode
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['cover'] = $request->file('cover')->store(
            'assets/cover', 'public'
        );

        Book::create($data);
        //Alert::success('Berhasil', ' Buku Baru Berhasil ditambahkan');
        return redirect()->route('book.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
