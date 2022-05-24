@extends('layouts.admin')
@section('header', 'Author')

@section('content')
<div class="col-md-6">
	<div class="card">

	<div class="card-header">
		<a href="{{ url('authors/create') }}" class="btn btn-sm btn-primary pull-right">Create New Author</a>
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
			@foreach($authors as $key => $author)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $author->name }}</td>
				<td>{{ $author->email }}</td>
				<td>{{ $author->phone_number }}</td>
				<td>{{ $author->address }}</td>
				<td>{{ count($author->books) }}</td>
				<td>{{ date('H:i:s - d M Y', strtotime($author->created_at)) }}</td>
				<td class="text-center">
					<a href="{{ url('authors/'.$author->id. '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
					<form action="{{ url('authors', ['id' => $author->id]) }}" method="post">
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