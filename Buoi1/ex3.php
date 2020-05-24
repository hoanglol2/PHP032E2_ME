<?php 
echo "<pre>";
/*BT3: Dãy số tự nhiên từ 1 - 20  trong đó:
	1, in ra tổng các số lẻ
	2, in ra tổng các số chẵn
	3, so sánh 2 tổng chẵn và lẻ/
*/
echo "BT3 </br>";
$sum_le = 0;
$sum_chan = 0;
for ($i = 1; $i  < 21 ; $i ++) { 
	if ($i % 2 != 0) {
		$sum_le += $i;
	} else {
		$sum_chan += $i;
	}
}
echo "-Tổng các số lẻ = ".$sum_le."</br>";
echo "-Tổng các số chẵn = ".$sum_chan."</br>";
// so sánh 2 tổng chẵn, lẻ
if ($sum_chan > $sum_le) {
	echo "=> Tổng chẵn lớn hơn tổng lẻ!";
} else {
	echo "=> Tổng lẻ lớn hơn tổng chẵn!";
}



echo "<hr>";
 ?>
 <a href="http://localhost/PHP0320E2_BTVN/Buoi1/">Quay lại</a>