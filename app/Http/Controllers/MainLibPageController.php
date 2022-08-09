<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class MainLibPageController extends Controller
{
    public function index(Request $request)
    {
        $books = Book::with('authors', 'publisher')->paginate(3); //dd($books);

        if($request->ajax()){
            return view('ajax-pagination', ['books' => $books]);
        }

        return view('library', ['books' => $books]);
    }
}
