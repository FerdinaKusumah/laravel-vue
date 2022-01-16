@extends('layouts.admin');
@section('header', 'Catalog')

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-2">
          <!-- /.col -->
          <div class="col-md-10">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Catalog</h3>

                {{-- <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div> --}}
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Total Book</th>
                      <th class="text-center">Created At</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($catalogs as $key => $catalog)
                    <tr>
                      <td class="text-center">{{ $key+1}}</td>
                      <td class="text-center">{{ $catalog->name }}</td>
                      <td class="text-center">{{ count($catalog->books)}}</td>
                      <td class="text-center">{{ date('H:i:s - d M Y', strtotime($catalog->created_at)) }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
@endsection