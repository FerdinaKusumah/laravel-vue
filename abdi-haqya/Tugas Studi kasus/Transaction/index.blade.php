@extends('layouts.admin')
@section('header', 'Transaction')

@section('css')
	<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

<div id="controller">
	<div class="card">
		<div class="card-header">
			<div class="row">
				<div class="col-md-10">
					<a href="{{ url('transactions/create') }}" class="btn btn-md btn-primary align-middle">Pinjam Baru</a>
				</div>
				<div class="col-md-2">
					<select name="gender" class="form-control">
						<option value="0">Semua Jenis Kelamin</option>
						<option value="m">Pria</option>
						<option value="f">Wanita</option>
					</select>
				</div>
			</div>
		</div>
		<div class="card-body p-3">
			<table id="datatable" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="text-center align-middle">No.</th>
						<th class="text-center align-middle">Tanggal Pinjam</th>
						<th class="text-center align-middle">Tanggal Kembali</th>
						<th class="text-center align-middle">Nama Peminjam</th>
						<th class="text-center align-middle">Durasi Pinjam</th>
						<th class="text-center align-middle">Total Buku</th>
						<th class="text-center align-middle">Total Bayar</th>
						<th class="text-center align-middle">Status</th>
						<th width="13%" class="text-center align-middle">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($transactions as $key => $transaction)
					<tr>
						<td class="text-center align-middle">{{ $key+1 }}</td>
						<td class="text-center align-middle"> {{ dateFormat($transaction->date_start) }}</td>
						<td class="text-center align-middle"> {{ dateFormat($transaction->date_end) }}</td>
						<td class="text-center align-middle"> {{ $transaction->name }}</td>
						<td class="text-center align-middle"> {{ dateDiff($transaction->date_start, $transaction->date_end) }}</td>
						<td class="text-center align-middle"> {{ $transaction->qty }}</td>
						<td class="text-center align-middle"> {{ $transaction->qty*$transaction->price }}</td>
						<td class="text-center align-middle"> {{ statusFormat($transaction->status) }}</td>
						<td class="align-middle">
							<div class="row text-center">
								<a href="{{ url('transactions/'.$transaction->id. '/edit') }}" class="btn btn-warning btn-sm col-sm-6">Edit</a>
								<form action="{{ url('transactions/', ['id' => $transaction->id]) }}" method="post" class="col-sm-5">
									<input class="btn btn-danger btn-sm" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
									@method('delete')
									@csrf
								</form>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection

@section('js')

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
		$(function () {
			$("#datatable").DataTable({
			}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
		});
	</script>

	<script type="text/javascript">
		var actionUrl = '{{ url('data/transactions') }}';
		$('select[name=gender]').on('change', function() {
			gender = $('select[name=gender]').val();

			if (gender == 0) {
				controller.table.ajax.url(actionUrl).load();
			} else {
				controller.table.ajax.url(actionUrl+'?gender='+gender).load();
			}
		})
	</script>
@endsection