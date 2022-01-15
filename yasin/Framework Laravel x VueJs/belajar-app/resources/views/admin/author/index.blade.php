@extends('layouts.admin')
@section('header', 'Author')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <a href="{{ url('authors/create') }}" class="btn btn-sm btn-primary pull-right">Create New Author</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Name</th>
                        <th class="text-center align-middle">Email</th>
                        <th class="text-center align-middle">Phone Number</th>
                        <th class="text-center align-middle">Address</th>
                        <th class="text-center align-middle">Total Buku</th>
                        <th class="text-center align-middle">Created_at</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($authors as $key => $author)
                    <tr>
                        <td class="text-center align-middle">{{ $key+1 }}</td>
                        <td class="text-center align-middle"> {{ $author->name }} </td>
                        <td class="text-center align-middle"> {{ $author->email }} </td>
                        <td class="text-center align-middle"> {{ $author->phone_number }} </td>
                        <td class="text-center align-middle"> {{ $author->address }} </td>
                        <td class="text-center align-middle"> {{ count($author->books) }} </td>
                        <td class="text-center align-middle">{{ date('d-M-Y', strtotime( $author->created_at )) }}</td>
                        <td class="text-center align-middle">
                          <a href="{{ url('authors/'.$author->id.'/edit') }}" class="btn btn-warning btn-sm mb-2"> Edit </a>
                          <form action="{{ url('authors', ['id' => $author->id]) }}" method="post">
                            <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="
                            return confirm('Are You sure wanna delete this?')">
                            @method('delete')
                            @csrf
                          </form>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="d-flex justify-content-end mt-2">
                {{ $authors->links() }}
                </div>
              </div>
                <!-- /.card -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection