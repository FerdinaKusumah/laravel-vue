@extends('layouts.admin')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Member</h1>
            <p class="text-muted">Ini Halaman Member</p>
            <a href="{{ route('members.create') }}" class="btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm text-white">Tambah Member</i>
            </a>
    </div>

<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="2">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Phone_Number</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Gender</th>
                            <th class="text-center">Phone_Number</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($members as $no => $member)
                        <tr>
                            <td class="text-center">{{ $no+1 }}</td>
                            <td>{{ $member->name }}</td>
                            <td class="text-center">{{ $member->gender }}</td>
                            <td class="text-center">{{ $member->phone_number }}</td>
                            <td>{{ $member->address }}</td>
                            <td>{{ $member->email }}</td>
                            <td>
                                <a href="{{ route('members.edit', $member->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>
                                <form action="{{ route('members.destroy', $member->id) }}" method="post"
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
