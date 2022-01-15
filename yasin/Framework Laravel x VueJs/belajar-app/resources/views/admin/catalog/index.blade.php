@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <a href="{{ url('catalogs/create') }}" class="btn btn-sm btn-primary pull-right">Create New Catalog</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                        <th class="text-center align-middle">No</th>
                        <th class="text-center align-middle">Name</th>
                        <th class="text-center align-middle">Total Buku</th>
                        <th class="text-center align-middle">Created_at</th>
                        <th class="text-center align-middle">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($catalogs as $key => $catalog)
                    <tr>
                        <td class="text-center align-middle">{{ $key+1 }}</td>
                        <td class="text-center align-middle"> {{ $catalog->name }} </td>
                        <td class="text-center align-middle"> {{ count($catalog->books) }} </td>
                        <td class="text-center align-middle">{{ date('d-M-Y', strtotime( $catalog->created_at )) }}</td>
                        <td class="text-center align-middle">
                          <a href="{{ url('catalogs/'.$catalog->id.'/edit') }}" class="btn btn-warning btn-sm mb-2"> Edit </a>
                          <form action="{{ url('catalogs', ['id' => $catalog->id]) }}" method="post">
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
                {{ $catalogs->links() }}
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