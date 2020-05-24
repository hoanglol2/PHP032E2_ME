<?php 
/*BT2 Chương trình chạy từ 1 - 50 trong đó:
	1, 1 - 30 in ra các số lẻ
	2, 30 - 50 tính tổng các số nguyên tố
*/

// 1,
echo "<pre>";
echo "BT2: </br>";
echo "- 1, Các số lẻ từ (1 -> 30) là : </br>";
for ($i = 1; $i  < 51 ; $i ++) { 
	if ($i > 0 && $i < 31) {
		if ($i % 2 != 0) {
			echo $i." | ";
		}
	}
}

// 2,
echo "</br> *************************************************** </br>";
echo "2, Tổng các số nguyên tố từ 30 - 50 là:  </br>";
$sum = 0;
for ($i = 30; $i  < 51 ; $i ++) { 
	for ($j = 2; $j  <= sqrt($i); $j ++) { 
		$check = false;
		if ($i % $j == 0) {
			$check = false;
			break;
		} else {
			$check = true;
		}
	}

	if ($check == true) {
		$sum += $i;
		// echo $i." | Là số nguyên tố"."</br>";
	}
}
echo "Kết Quả | ".$sum;
echo "<hr>";
 ?>
 <a href="http://localhost/PHP0320E2_BTVN/Buoi1/">Quay lại</a>