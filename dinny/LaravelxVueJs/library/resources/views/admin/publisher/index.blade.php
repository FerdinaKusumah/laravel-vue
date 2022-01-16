@extends('layouts.admin');
@section('header', 'Publisher')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <a href="{{ url('publishers/create') }}" class="btn btn-sm btn-primary pull-right">Create New Publisher</a>
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
                    @foreach($publishers as $key => $publisher)
                    <tr>
                        <td class="text-center align-middle">{{ $key+1 }}</td>
                        <td class="text-center align-middle"> {{ $publisher->name }} </td>
                        <td class="text-center align-middle"> {{ $publisher->email }} </td>
                        <td class="text-center align-middle"> {{ $publisher->phone_number }} </td>
                        <td class="text-center align-middle"> {{ $publisher->address }} </td>
                        <td class="text-center align-middle"> {{ count($publisher->books) }} </td>
                        <td class="text-center align-middle">{{ date('d-M-Y', strtotime( $publisher->created_at )) }}</td>
                        <td class="text-center align-middle">
                          <a href="{{ url('publishers/'.$publisher->id.'/edit') }}" class="btn btn-warning btn-sm mb-2"> Edit </a>
                          <form action="{{ url('publishers', ['id' => $publisher->id]) }}" method="post">
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
                <!-- /.card-body -->
                <div class="d-flex justify-content-end mt-2">
                {{ $publishers->links() }}
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
