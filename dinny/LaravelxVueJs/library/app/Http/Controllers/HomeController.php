<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Book;
use App\Models\Catalog;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Author;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $total_members = Member::count();
        $total_books = Book::count();
        $total_publishers = Publisher::count();
        $total_transactions = Transaction::where('date_start', 'like', '60%')->count();

        $data_donut = Book::select(Book::raw("COUNT(publisher_id) as total"))->groupBy('publisher_id')->orderBy('publisher_id', 'asc')->pluck('total');
        $label_donut = Publisher::orderBy('publisher_id', 'asc')->join('books', 'books.publisher_id', '=', 'publisher_id')->groupBy('publishers.name')->pluck('publishers.name');

        $data_pie = Book::select(Book::raw("COUNT('catalog_id') as total"))->groupBy('catalog_id')->orderBy('catalog_id', 'asc')->pluck('total');
        $label_pie = Catalog::orderBy('catalogs.name', 'asc')->join('books', 'books.catalog_id', '=', 'catalogs.id')->groupBy('catalogs.name')->pluck('catalogs.name');

        // return $data_donut;

        $label_bar = ['Transactions'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = 'rgba(60,141,188,0.9)';
            $data_month = [];

            foreach (range(1, 12) as $month) {
                    $data_month[] = Transaction::select(Transaction::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first()->total;
            }
            $data_bar[$key]['data'] = $data_month;
        }
        return view('home', compact('total_books', 'total_members', 'total_transactions', 'total_publishers', 'data_donut', 'label_donut', 'data_bar', 'data_pie', 'label_pie'));
    }
    public function catalog()
    {
        $data_katalog = Catalog::all();
        return view('admin.catalog', compact('data_katalog'));
    }
    public function publisher()
    {
        $data_publisher = Publisher::all();
        return view('admin.publisher', compact('data_publisher'));
    }
    public function author()
    {
        $data_author = Author::all();
        return view('admin.author', compact('data_author'));
    }
}
