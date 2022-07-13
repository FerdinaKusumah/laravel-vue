<?php
/* Soal nomor 1 */
function factorial(num) {
    if(num === 1){
        return num;
    }
    return num * factorial(num-1)
 }
 console.log(factorial(4));

function factorial(num) {
    if(num === 1){
        return num;
    }
    return num * factorial(num-1)
 }
 console.log(factorial(8));
/* End Soal nomor 1 */

/* Soal nomor 2 */
function reversed(string) {
    var length = string.length;
    var reversed = [];
    var joined = ("");
    for (var i = length; i > 0; i--){
        reversed.push(string.charAt(i-1));
    }
    for (i = 0; i < (length) ; i++){
        joined += (reversed[i]);
    }
    return joined;
}
console.log(reversed("abcde"));
/* End Soal nomor 2 */

/* Soal Nomor 3 */
function separateUnits(num) {
    var number = num.toString().split('');
    var multiplier = 1;
    for (var i = number.length - 1; i >= 0; i--) {
        number[i] *= multiplier;
        multiplier *= 10;
    }
    return number;
}
console.log(separateUnits(9865321));
/* End Soal Nomor 3 */

/* Soal Nomor 4 */
int a = 3;
int b = 7;

int temp = a;
a = b;
b = temp;
/* End Soal Nomor 4 */

/* Soal Nomor 5 */
function terbilang ($angka) {
    $angka = abs($angka);
    $baca = array('', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas');
    $terbilang = '';
    if ($angka < 12) {
        $terbilang = ' ' . $baca[$angka];
    } elseif ($angka < 20) {
        $terbilang = terbilang($angka - 10) . ' belas';
    } elseif ($angka < 100) {
        $terbilang = terbilang($angka / 10) . ' puluh' . terbilang($angka % 10);
    } elseif ($angka < 200) {
        $terbilang = 'seratus' . terbilang($angka - 100);
    } elseif ($angka < 1000) {
        $terbilang = terbilang($angka / 100) . ' ratus' . terbilang($angka % 100);
    }
}
/* End Soal Nomor 5 */

/* Soal Nomor 6 */
-
/* End Soal Nomor 6 */

/* Soal Nomor 7 */
-
/* End Soal Nomor 7 */

/* Soal Nomor 8 */
foreach(range(1, 15) as $number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
        echo $number . '<br>';
        continue;
    }
    if ($number % 3 == 0) echo 'Edu';
    if ($number % 5 == 0) echo 'Work';
    echo '<br>';
} 
/* End Soal Nomor 8 */

/* Soal Nomor 9 */
const getTheRange = (arr) => {
    let low = arr[0],
      high = arr[0];
    for (let i = 1; i < arr.length; i++) {
      if (arr[i] < low) {. 
        low = arr[i];
      } else {
        high = arr[i];
      }
    }
    let range = high - low;
    return [low, high, range];
  };
  
  console.log(getTheRange([4, 2, 6, 88, 3, 11]));
/* End Soal Nomor 9 */

/* Soal Nomor 10 */
function leapYear(year)
{
  return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
}
    console.log(leapYear(2024));
/* End Soal Nomor 10 */
?>