<?php

namespace App\Http\Controllers;

use DB;
use App\Book;
use App\Catalog;
use App\Member;
use App\Publisher;
use App\Author;
use App\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controllers
{
	public function dashboard()
	{
		$total_buku = Book::count();
		$total_anggota = Member::count();
		$total_peminjaman = Transaction::whereMount('tgl_pinjam', date('m'))->count();
		$total_penerbit = Publisher::count();

		$data_donut = Book::select(DB::raw("COUNT(publisher_id) as total"))->groupBy('publisher_id')->orderBy('publisher_id', 'asc')->pluck('total');
		$label_donut = Publisher::orderBy('publishers.id', 'asc')->join('books', 'books.publisher_id', '=', 'publishers.id')->groupBy('publisher_name')->pluck('publisher_name');

		$label_bar = ['Transaction', 'Return'];
		$data_bar = [];

		foreach ($label_bar as $key => $value) {
			$data_bar[$key]['label'] = $label_bar[$key];
			$data_bar[$key]['backgroundColor'] = $key == 0 ? 'rgba(60,141,188,0.9)' : 'rgba(210, 214, 222, 1);
			$data_month = [];

			foreach (range(1,12) as $month) { if ($key == 0) {
					$data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_pinjam', $month)->first()->total;
				} else {
					$data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_kembali', $month)->first()->total;
				}
			}
			$data_bar[$key]['data'] = $data_month;
		};

		$label_line = ['Transaction', 'Return'];
		$data_line = [];

		foreach ($label_line as $key => $value) {
			$data_line[$key]['label'] = $label_line[$key];
			$data_line[$key]['backgroundColor'] = $key == 0 ? 'rgba(60,141,188,0.9)' : 'rgba(210, 214, 222, 1);
			$data_month = [];

			foreach (range(1,12) as $month) { if ($key == 0) {
					$data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_pinjam', $month)->first()->total;
				} else {
					$data_month[] = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('tgl_kembali', $month)->first()->total;
				}
			}
			$data_bar[$key]['data'] = $data_month;
		}

		return view('admin.dashboard', compact('total_buku', 'total_anggota', 'total_peminjaman', 'total_penerbit', 'data_donut', 'label_donut', 'data_bar', 'data_line'));
	}
}