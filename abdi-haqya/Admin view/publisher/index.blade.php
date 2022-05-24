@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')
<div class="col-md-6">
	<div class="card">

	<div class="card-header">
		<a href="{{ url('publishers/create') }}" class="btn btn-sm btn-primary pull-right">Create New Publisher</a>
	</div>
	</div>

	<div class="card-body p-0">
	<table class="table">
		<thead>
			<tr>
				<th style="width: 10px">No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>Total Book</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($publishers as $key => $publisher)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $publisher->name }}</td>
				<td>{{ $publisher->email }}</td>
				<td>{{ $publisher->phone_number }}</td>
				<td>{{ $publisher->address }}</td>
				<td>{{ count($publisher->books) }}</td>
				<td>{{ date('H:i:s - d M Y', strtotime($publisher->created_at)) }}</td>
				<td class="text-center">
					<a href="{{ url('publishers/'.$publisher->id. '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
					<form action="{{ url('publishers', ['id' => $publisher->id]) }}" method="post">
						<input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
						@method('delete')
						@csrf
					</form>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>

</div>
@endsection