<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Catalog;
use App\Models\Transaction;

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
        //$members = Member::with('user')->get();
        //$books = Book ::with('publisher')->get();
        //$publishers = Publisher::with('books')->get();
        //$authors = Author::with('books')->get();

        //no 1
        //$data = Member:: select('*')
            //->join('users', 'users.member_id', '=', 'members.id')
            //->get();

        //no 2
        //$data2 = Member:: select('*')
            //->leftjoin('users', 'users.member_id', '=', 'members.id')
            //->where('users.id', Null)
            //->get();

        //no 3
        //$data3 = Transaction:: select('members.id', 'members.name')
           // ->rightjoin('members', 'members.id', '=', 'transactions.member_id')
            //->where('transactions.member_id', Null)
            //->get();

         //no 4

        //no 4
        //$data4 = Member:: select('members.id', 'members.name', 'members.phone_number')
            //->join('transactions', 'transactions.member_id', '=', 'members.id')
            //->orderBy('members.id', 'asc')
           // ->get();

         //no 5

        //no 5
        //$data5 = Member:: select('members.id', 'members.name', 'members.phone_number')
            //->join('transactions', 'transactions.member_id', '=', 'members.id')
            //->selectRaw('count(members.id) as number_of_orders, members.id')
            //->groupBy('members.id')
            //->having('number_of_orders', '>', 1)
            //->get();

        //no 6
        //$data6 = Member:: select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            //->join('transactions', 'transactions.member_id', '=', 'members.id')
            //->get();

        //no 7    
        //$data7 = Member:: select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            //->join('transactions', 'transactions.member_id', '=', 'members.id')
            //->where('transactions.date_end', 'like', '%06%' )
            //->get();

        //no 8
        //$data8 = Member:: select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            //->join('transactions', 'transactions.member_id', '=', 'members.id')
           //->where('transactions.date_start', 'like', '%05%' )
           // ->get();

        //no 9
        //$data8 = Member:: select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
            //->join('transactions', 'transactions.member_id', '=', 'members.id')
            //->where('transactions.date_start', 'like', '%06%' )
            //->where('transactions.date_end', 'like', '%06%' )
            //->get();

        // Soal 10
        //$data10 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    //->join('transactions', 'transactions.member_id', '=', 'members.id')
                    //->where('members.address', 'like', '%bandung%')
                    //->get();

        // Soal 11
        //$data11 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    //->join('transactions', 'transactions.member_id', '=', 'members.id')
                    //->where('members.address', 'like', '%bandung%')
                    //->where('members.gender', 'like', '%f%')
                    //->get();

        // Soal 12
        //$data12 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'books.qty')
                    //->join('transactions', 'transactions.member_id', '=', 'members.id')
                    //->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
                    //->join('books', 'books.id', '=', 'transaction_details.book_id')
                    //->where('books.qty', '>', '1')
                    //->get();

        // Soal 13
        //$data13 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'books.price', Book::raw('transaction_details.qty * books.price as total_price'))
                    //->join('transactions', 'transactions.member_id', '=', 'members.id')
                    //->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
                    //->join('books', 'books.id', '=', 'transaction_details.book_id')
                    //->get();   
                
        // Soal 14
        //$data14 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'publishers.name as publisher', 'authors.name as author', 'catalogs.name as catalog')
                    // author, publisher, dan catalog harus diberi 'as', karena semua kolom namanya name. Jadi laravel bingung mau yang mana
                    //->join('transactions', 'transactions.member_id', '=', 'members.id')
                    //->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
                    //->join('books', 'books.id', '=', 'transaction_details.book_id')
                    //->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                    //->join('authors', 'books.author_id', '=', 'authors.id')
                    //->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
                    //->get();
        
        // Soal 15
        //$data15 = Catalog::select('catalogs.*', 'books.title')
                    //->join('books', 'books.catalog_id', '=', 'catalogs.id')
                    //->get();

        // Soal 16
        //$data16 = Book::select('books.*', 'publishers.name as publisher')
                    //->leftjoin('publishers', 'books.publisher_id', '=', 'publishers.id')
                    //->get();
        
        // Soal 17
        //$data17 = Book::select(Book::raw('count(*) as publisher_count'))
                    //->where('publisher_id', '=', '5')
                    //->groupBy('publisher_id')
                    //->get();

        // Soal 18
        //$data18 = Book::select('*')
                    //->where('price', '>', '10000')
                    //->get();

        // Soal 19
        //$data19 = Book::select('books.*')
                    //->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                    //->where('books.publisher_id', '=', '1')
                    //->where('books.qty', '>', '10')
                    //->get();

        // Soal 20
        //$data20 = Member::select('members.*')
                    //->where('created_at', 'like', '%06%')
                    //->get();)


        //return $data20;
        return view('home');
    }
}
