@extends('layouts.admin')
@section('header', 'Member')

@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<section class="content">
  <div id="controller">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col -->
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right"> Create New Member</a>
              <!-- <a href="{{ url('members/create') }}" class="btn btn-sm btn-primary pull-right">Create New Member</a> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table id="datatable" class="table">
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Gender</th>
                      <th class="text-center">Phone Number</th>
                      <th class="text-center">Address</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Aksi</th>
                    </tr>
              </table>
              <!-- /.card-body -->
              </div>
            <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

<div class="modal fade" id="modal-create">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" :action="actionUrl" autocomplete="off">
        <div class="modal-header">
          <h4 class="modal-title">Member</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @csrf

          <input type="hidden" name="_method" v-if="editStatus">

          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" :value="data.name" required="">
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" name="gender" :value="data.gender" required="">
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone_number" :value="data.phone_number" required="">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" :value="data.address" required="">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" :value="data.email" required="">
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div> 
</div>
<div class="modal fade" id="modal-edit">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" :action="actionUrl" autocomplete="off">
        <div class="modal-header">
          <h4 class="modal-title">Member</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          @csrf

          <input type="hidden" name="_method" value="PUT">

          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" :value="data.name" required="">
          </div>
          <div class="form-group">
            <label>Gender</label>
            <input type="text" class="form-control" gender="gender" :value="data.gender" required="">
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone_number" :value="data.phone_number" required="">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" :value="data.address" required="">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" :value="data.email" required="">
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
      </form>
    </div>
  </div> 
</div>
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript">
  var actionUrl = '{{ url('members') }}';
  var apiUrl = '{{ url('api/members') }}';

  var columns = [
    {data: 'DT_RowIndex', class: 'text-center', orderable: true},
    {data: 'gender', class: 'text-center', orderable: true},
    {data: 'email', class: 'text-center', orderable: true},
    {data: 'phone_number', class: 'text-center', orderable: true},
    {data: 'address', class: 'text-center', orderable: true},
    {data: 'email', class: 'text-center', orderable: true},
    {render: function (index, row, data, meta){
      return `
        <a href="#" class="btn btn-warning btn-sm" onclick="controller.editData(event, ${meta.row})">
          Edit
        </a>
        <a class="btn btn-danger btn-sm" onclick="controller.deleteData(event, ${data.id})">
          Delete
        </a>
      `
      ;
    }, orderable: false, width: '200px', class: 'text-center'},
  ];
</script>

<!-- Memanggil Data.js -->
<script src="{{ asset('js/data.js') }}"></script>

<script type="text/javascript">
  $(function () { 
    $("#datatable").DataTable(
      {
      "responsive": true, "lengthChange": false, "autoWidth": false, 
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    .buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)'),
      "searching": false,
      "ordering": true,
      "info": true
  });
  });
</script>
@endsection

