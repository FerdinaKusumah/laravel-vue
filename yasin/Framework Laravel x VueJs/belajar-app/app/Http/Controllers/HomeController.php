<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Catalog;
use App\Models\Author;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    // public function dashboard() {

    // }

    // public function catalog() 
    // {
    //     $data_catalog = Catalog::all();

    //     return view('admin.catalog.index', compact('data_catalog'));
    // }

    // public function publisher() 
    // {
    //     // $data_publisher = publisher::all();

    //     return view('admin.publisher');
    // }

    // public function author() 
    // {
    //     // $data_author = Author::all();

    //     return view('admin.author');
    // }

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

        // Soal 1
        $data = Member::select('*')
                    ->join('users', 'users.member_id', '=', 'members.id')
                    ->get();

        // Soal 2
        $data2 = Member::select('*')
                    ->leftJoin('users', 'users.member_id', '=', 'members.id')
                    ->where('users.id', NULL)
                    ->get();

        // Soal 3
        $data3 = Transaction::select('members.id', 'members.name')
                    ->rightJoin('members', 'members.id', '=', 'transactions.member_id')
                    ->where('transactions.member_id', NULL)
                    ->get();

        // Soal 4
        $data4 = Member::select('members.id', 'members.name', 'members.phone_number')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->orderBy('members.id', 'asc')
                    ->get();

        // Soal 5
        $data5 = Member::select('members.id', 'members.name', 'members.phone_number')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->selectRaw('count(members.id) as number_of_orders, members.id')
                    ->groupBy('members.id') //agar query bisa berjalan, config\database.php -> mysql -> 'strict' = false
                    ->having('number_of_orders', '>', 1) 
                    ->get();

        // Soal 6
        $data6 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->get();

        // Soal 7
        $data7 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->where('transactions.date_end', 'like', '%06%')
                    ->get();

        // Soal 8
        $data8 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->where('transactions.date_start', 'like', '%05%')
                    ->get();
        
        // Soal 9
        $data9 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->where('transactions.date_start', 'like', '%06%')
                    ->where('transactions.date_end', 'like', '%06%')
                    ->get();

        // Soal 10
        $data10 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->where('members.address', 'like', '%bandung%')
                    ->get();

        // Soal 11
        $data11 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->where('members.address', 'like', '%bandung%')
                    ->where('members.gender', 'like', '%f%')
                    ->get();

        // Soal 12
        $data12 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'books.qty')
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
                    ->join('books', 'books.id', '=', 'transaction_details.book_id')
                    ->where('books.qty', '>', '1')
                    ->get();

        // Soal 13
        $data13 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'books.price', Book::raw('transaction_details.qty * books.price as total_price'))
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
                    ->join('books', 'books.id', '=', 'transaction_details.book_id')
                    ->get();   
                
        // Soal 14
        $data14 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'books.isbn', 'transaction_details.qty', 'books.title', 'publishers.name as publisher', 'authors.name as author', 'catalogs.name as catalog')
                    // author, publisher, dan catalog harus diberi 'as', karena semua kolom namanya name. Jadi laravel bingung mau yang mana
                    ->join('transactions', 'transactions.member_id', '=', 'members.id')
                    ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
                    ->join('books', 'books.id', '=', 'transaction_details.book_id')
                    ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                    ->join('authors', 'books.author_id', '=', 'authors.id')
                    ->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
                    ->get();
        
        // Soal 15
        $data15 = Catalog::select('catalogs.*', 'books.title')
                    ->join('books', 'books.catalog_id', '=', 'catalogs.id')
                    ->get();

        // Soal 16
        $data16 = Book::select('books.*', 'publishers.name as publisher')
                    ->leftjoin('publishers', 'books.publisher_id', '=', 'publishers.id')
                    ->get();
        
        // Soal 17
        $data17 = Book::select(Book::raw('count(*) as publisher_count'))
                    ->where('publisher_id', '=', '5')
                    ->groupBy('publisher_id')
                    ->get();

        // Soal 18
        $data18 = Book::select('*')
                    ->where('price', '>', '10000')
                    ->get();

        // Soal 19
        $data19 = Book::select('books.*')
                    ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
                    ->where('books.publisher_id', '=', '1')
                    ->where('books.qty', '>', '10')
                    ->get();

        // Soal 20
        $data20 = Member::select('members.*')
                    ->where('created_at', 'like', '%06%')
                    ->get();


        // return $data17;
        $total_books = Book::count();
        $total_members = Member::count();
        $total_publishers = Publisher::count();
        $total_transactions = Transaction::where('date_start', 'like', '%06%')->count();

        $data_donut = Book::select(Book::raw("COUNT('publisher_id') as total"))->groupBy('publisher_id')->orderBy('publisher_id', 'asc')->pluck('total');
        $label_donut = Publisher::orderBy('publishers.id', 'asc')->join('books', 'books.publisher_id', '=', 'publishers.id')->groupBy('publishers.name')->pluck('publishers.name');

        $data_pie = Book::select(Book::raw("COUNT('catalog_id') as total"))->groupBy('catalog_id')->orderBy('catalog_id', 'asc')->pluck('total');
        $label_pie = Catalog::orderBy('catalogs.name', 'asc')->join('books', 'books.catalog_id', '=', 'catalogs.id')->groupBy('catalogs.name')->pluck('catalogs.name');

        $label_bar = ['Transactions'];
        $data_bar = [];
        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = 'rgba(60,141,188,0.9)';
            $data_month = [];

            foreach (range(1,12) as $month) {
                $data_month[] = Transaction::select(Transaction::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
            }
            $data_bar[$key]['data'] = $data_month;
        }
        return view('home', compact('total_books', 'total_members', 'total_publishers', 'total_transactions', 'data_donut', 'label_donut', 'data_bar', 'data_pie', 'label_pie'));
    }
}
