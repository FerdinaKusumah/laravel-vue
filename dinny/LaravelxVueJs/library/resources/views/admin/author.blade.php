@extends('layouts.admin')
@section('header', 'Author')

@section('css')

@endsection

@section('content')
<section class="content">
  <div id="controller">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 offset-md-2">
        <!-- /.col -->
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">
              <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right"> Create New Author</a>
              <!-- <a href="{{ url('authors/create') }}" class="btn btn-sm btn-primary pull-right">Create New Author</a> -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table">
                <thead>
                    <tr>
                      <th style="width: 10px">No.</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Phone Number</th>
                      <th class="text-center">Address</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($authors as $key => $author)
                    <tr>
                      <td class="text-center">{{ $key+1}}</td>
                      <td class="text-center">{{ $author->name }}</td>
                      <td class="text-center">{{ $author->email }}</td>
                      <td class="text-center">{{ $author->phone_number }}</td>
                      <td class="text-center">{{ $author->address }}</td>
                      <td class="text-center">
                        <!-- <a href="#" @click="editData({{ $author }})" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ url('authors', ['id' => $author->id]) }}" method="post">
                          <input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                          @method('delete')
                          @csrf
                        </form> -->
                        <a href="#" @click="editData({{ $author }})" class="btn btn-warning btn-sm">Edit</a>
                        <a href="#" @click="deleteData({{ $author->id }})" class="btn btn-danger btn-sm">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
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

<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" :action="actionUrl" autocomplete="off">
        <div class="modal-header">
          <h4 class="modal-title">Author</h4>
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
            <label>Email</label>
            <input type="text" class="form-control" name="email" :value="data.email" required="">
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="phone_number" :value="data.phone_number" required="">
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" name="address" :value="data.address" required="">
          </div>
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
  <script type="text/javascript">
    var controller = new Vue({
      el: '#controller',
      data: {
        data : {},
        actionUrl : '{{ url('authors') }}',
        editStatus : false
      },
      mounted: function() {

      },
      methods: {
        addData() {
          this.data = {};
          this.actionUrl = '{{ url('authors') }}';
          this.editStatus = false;
          $('#modal-default').modal();
        },
        editData(data) {
          this.data = data;
          this.actionUrl = '{{ url('authors') }}'+'/'+data.id;
          this.editStatus = true;
          $('#modal-default').modal();
        },
        deleteData(id) {
          this.actionUrl = '{{ url('authors') }}'+'/'+id;

          if (confirm("Are You sure wanna delete this?")) {
              axios.post('{{ url('authors') }}'+'/'+id, {_method: 'DELETE'}).then(response =>{
                location.reload();
              });

              // axios.delete(this.actionURL).then(response => {
              // console.log(response);
              // });
              // axios.delete('{{ url('authors') }}'+'/'+id)
              // .then(response => {
              //     location.reload();
              //     console.log();
              // })
              // .catch(function (error) {
              //     console.log(error.response)
              // })
          }
        }
      }
    });
  </script>
@endsection
