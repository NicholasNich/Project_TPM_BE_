<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function show() {
        $books = Book::all();
        return view('welcome', compact('books')); 
        // compact = untuk passing data
    }

    public function create() {
        return view('createExpense');
    }

    public function store(Request $request) {
        Book::create([
            'category' => $request->title, 
            'amount'=> $request->amount, 
            'date' => $request->date
            ]);

        return redirect(route('show'));
        // bisa juga return redirect('/');
    }
}
