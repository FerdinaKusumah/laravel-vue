@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Book</h1>
            <p class="text-muted">Ini Halaman Book</p>
            <a href="{{ route('books.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white">Tambah Book</i>
            </a>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif

<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Isbn</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Year</th>
                            <th class="text-center">Publisher</th>
                            <th class="text-center">Author</th>
                            <th class="text-center">Catalog</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Isbn</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Year</th>
                            <th class="text-center">Publisher</th>
                            <th class="text-center">Author</th>
                            <th class="text-center">Catalog</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($books as $no => $book)
                        <tr>
                            <td class="text-center">{{ $no+1 }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->year }}</td>
                            <td>{{ $book->publisher->name }}</td>
                            <td>{{ $book->author->name }}</td>
                            <td>{{ $book->catalog->name }}</td>
                            <td>{{ $book->qty }}</td>
                            <td>{{ $book->price }}</td>
                            <td>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="post"
                                    class="d-inline" onclick="return confirm('Yakin Ingin Dihapus?')">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

@endsection
