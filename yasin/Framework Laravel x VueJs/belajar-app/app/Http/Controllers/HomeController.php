<?php

namespace App\Http\Controllers;

// use App\Models\Member;
// use App\Models\User;
// use App\Models\Book;
// use App\Models\Publisher;
// use App\Models\Catalog;
// use App\Models\Author;
// use App\Models\Transaction;
// use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $members = Member::with('user')->get();
        // return $members;
        // $users = User::with('member')->get();
        // return $users;
        // $members = Member::with('transaction')->get();
        // return $members;
        // $transactions = Transaction::with('member')->get();
        // return $transactions;
        // $tds = TransactionDetail::with('transactions')->get();
        // return $tds;
        // $transactions = Transaction::with('transaction_detail')->get();
        // return $transactions;
        // $books = Book::with('publisher')->get();
        // return $books;
        // $publishers = Publisher::with('books')->get();
        // return $publishers;
        // $books = Book::with('transaction_detail')->get();
        // return $books;
        // $transaction_details = TransactionDetail::with('books')->get();
        // return $transaction_details;
        // $books = Book::with('author')->get();
        // return $books;
        // $authors = Author::with('books')->get();
        // return $authors;
        // $books = Book::with('catalog')->get();
        // return $books;
        // $catalogs = Catalog::with('books')->get();
        // return $catalogs;

        return view('home');
    }
}
