@extends('layouts.admin')
@section('header', 'Transaction')

@section('css')
	<link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
@endsection

@section('content')
	<div class="row">
		<div class="col-lg-8">
			<div class="card card-primary">
				<div class="card-header">
					<h3 class="card-title">Peminjaman Baru</h3>
				</div>
				<form action="{{ url('transactions') }}" method="post">
					@csrf

					<div class="form-group row mt-3">
						<label class="col-md-3 ml-3 mr-0">Nama</label>
						<select name="member_id" class="form-control col-md-8" id="">
							@foreach($members as $member)
							<option :selected="transaction.member_id == {{ $member->id }}" value="{{ $member->id }}">{{ $member->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group row">
						<label class="mt-3 col-md-3">Date:</label>
						<div class="input-group date col-md-4" id="reservationdate" data-range-input="nearest">
							<input type="text" name="date_start" class="form-control datetimepicker-input" data-target="#reservationdate"/>
						<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
					</div>
					<div class="input-group date col-md-4" id="reservationdate1" data-target-input="nearest">
							<input type="text" name="date_end" class="form-control datetimepicker-input" data-target="#reservationdate1"/>
						<div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
					</div>
				</div>
				<div class="form-group row mt-3">
					<label class="col-md-3 ml-3 mr-0">Book</label>
					<select name="book_id" class="form-control col-md-8" id="">
						@foreach($books as $book)
						<option value="{{ $book->id }}">{{ $book->title }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<div class="form-check">
						<input class="form-check-input" value="1" type="radio" name="status" id="flexRadiodefault1">
						<label class="form-check-label" for="flexRadioDefault1">
							Sudah Dikembalikan
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" value="0" type="radio" name="status" id="flexRadioDefault2" checked>
						<label class="form-check-label" for="flexRadioDefault2">
							Belum Dikembalikan
						</label>
					</div>
				</div>
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@section('js')
<script type="text/javascript">
	$('#reservationdate').datetimepicker({
		format: 'L'
	});
	$('#reservationdate1').datetimepicker({
		format: 'L'
	});
</script>
@endsection
 