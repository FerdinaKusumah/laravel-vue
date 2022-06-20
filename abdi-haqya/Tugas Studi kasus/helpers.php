<?php
	use Carbon\Carbon;

	function dateFormat($value) {
		return date('d-M-Y', strtotime( $value ));
	}
	function dateFormatwithTime($value) {
		return date('H:i:s - d-M-Y', strtotime( $value ));
	}
	function statusFormat($value) {
		if ($value == true) {
			return "Dikembalikan";
		} else {
			return "Belum Dikembalikan";
		};
	}
	function dateDiff($value1, $value2) {
		$value1 = Carbon::createMidnightDate($value1);
		$value2 = Carbon::createMidnightDate($value2);
		$datedifference = $value1->diffInDays($value2);

		return $datedifference." hari";
	}
?>