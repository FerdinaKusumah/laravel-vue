@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')
<div class="card">
	<div class="card-header">
		<a href="{{ url('catalogs/create') }}" class="btn btn-sm btn-primary pull-right">Create New Catalog</a>
	</div>

<div class="card-body p-0">
	<table class="table table-striped">
		<thead>
			<tr>
				<th style="width: 10px">No.</th>
				<th>Name</th>
				<th>Total Book</th>
				<th>Created At</th>
				<th>Action</th>
			</tr>
		</thead>	
		<tbody>
			@foreach($catalogs as $key => $catalog)
			<tr>
				<td>{{ $key+1 }}</td>
				<td>{{ $catalog->name }}</td>
				<td>{{ count($catalog->books) }}</td>
				<td>{{ date('H:i:s - d M Y', strtotime($catalog->created_at)) }}</td>
				<td class="text-center">
					<a href="{{ url('catalogs/'.$catalog->id. '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
					<form action="{{ url('catalogs', ['id' => $catalog->id]) }}" method="post">
						<input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
						@method('delete')
						@csrf
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

</div>
@endsection