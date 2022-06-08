<?php

namespace App\Http\Controllers\Admin;

use App\Models\Transaction;
use App\Models\Member;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\Catalog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $catalogs = Catalog::select('catalogs')->count();
        $authors = Author::select('authors')->count();
        $books = Book::select('books')->count();
        $members = Member::select('members')->count();
        $publishers = Publisher::select('publishers')->count();
        return view('pages.admin.dashboard', compact(['catalogs', 'authors', 'publishers', 'books', 'members']));
    }
}