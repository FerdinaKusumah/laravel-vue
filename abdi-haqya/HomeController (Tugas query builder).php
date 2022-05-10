<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Book;
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
        // no. 1
       $data = Member::select('*')
                    ->where('role','like','admin%')
                    ->get();

        // no. 2
        $data2 = Member::select('*')
                    ->where('role','like','user%')
                    ->get();

        // no. 3
        $data3 = Member::select('members.id','members.name','transactions.id')
                    ->leftJoin('transactions','transactions.member_id','=','members.id')
                    ->where('transactions.id', NULL)
                    ->get();

        // no. 4
        $data4 = Member::select('members.id','members.name','members.phone_number')
                    ->rightJoin('transactions','transactions.member_id','=','members.id')
                    ->orderBy('transactions.id','asc')
                    ->get();

        // no. 5
        $data5 = DB::table('members')
                    ->selectRaw('count(members.id) as number_of_transactions','members.name','members.phone_number')
                    ->rightJoin('transactions', 'transactions.member_id','=','members.id')
                    ->groupBy('members.name')
                    ->havingCount('members.id','>=', 2)
                    ->get();

        // no. 6
        $data6 = Member::select('members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end')
                    ->join('transactions','transactions.member.id','=','members.id')
                    ->groupBy('members.name', 'asc')
                    ->get();

        // no. 7
        $data7 = Member::select('members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->where('transactions.date_end','like','2021-06%')
                    ->get();

        // no. 8
        $data8 = Member::select('members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->where('transactions.date_start','like','2021-05%')
                    ->get();

        // no. 9
        $data9 = Member::select('members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->where('transactions.date_start','like','2021-06%')
                    ->where('transactions.date_end','like','2021-06%')
                    ->get();

        // no. 10
        $data10 = Member::select('members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->where('members.address','like','Bandung%')
                    ->get();

        // no. 11
        $data11 = Member::select('members.name','members.address','members.gender','members.phone_number','transactions.date_start','transactions.date_end')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->where('members.address','like','Bandung%')
                    ->where('members.gender','like','P%')
                    ->get();

        // no. 12
        $data12 = Member::select('members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end','transaction_details.book_id','transaction_details.qty')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->join('transactions_details','transaction_details.transaction_id','=','transactions.id')
                    ->where('transaction_details.qty','>','1')
                    ->get();

        // no. 13
        $data13 = Member::select('members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end','books.isbn','transaction_detials.qty','books.title','books.price','(books.qty*books.price) as total price')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->join('transaction_details','transaction_details.transaction_id','=','transactions.id')
                    ->join('books','books.id','=','transaction_details.book_id')
                    ->get();

        // no. 14
        $data14 = Member::select('members.name','members.address','members.phone_number','transactions.date_start','transactions.date_end','books.isbn','books.qty','books.title','publishers.name','authors.name','catalogs.name')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->join('transaction_details','transaction_details.transaction_id','=','transactions.id')
                    ->join('books','books.id','=','transaction_details.book_id')
                    ->join('publishers','publishers.id','=','books.publisher_id')
                    ->join('authors','authors.id','=','books.author_id')
                    ->join('catalog','catalogs.id','=','books.catalog_id')
                    ->get();

        // no. 15
        $data15 = Book::select('books.catalog_id','books.name','books.title')
                    ->join('catalog','catalogs.id','=','books.catalog_id')
                    ->get();

        // no. 16
         $data16 = Book::select('books.isbn','books.title','books.year','books.publisher_id','books.author_id','books.catalog_id','books.qty','books.price','publishers.name')
                    ->leftJoin('publishers','publishers.id','=','books.publisher_id')
                    ->get();
           
        // no. 17
        $data17 = Book::select('count(books.author_id) as total','books.author_id')
                    ->groupBy('books.author_id')
                    ->orderBy('count(books.author_id', 'asc')
                    ->get();

        // no. 18
        $data18 = Book::select('*')
                    ->where('books.price','>', 10000)
                    ->get();

        // no. 19
        $data19 = Book::select('*')
                    ->where('books.publisher_id','like','PN01%','and','books.qty','>', 10)
                    ->get();

        // no. 20
        $data20 = Member::select('*')
                    ->join('transactions','transactions.member_id','=','members.id')
                    ->where('transactions.date_start','like','2021-06%')
                    ->get();
        return $data20;
        return view('home');
    }
}
