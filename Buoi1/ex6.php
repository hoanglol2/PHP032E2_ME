<?php 
/*BT6. Viết chương trình thực hiện các yêu cầu sau: 
- Với số n là số ngẫu nhiên trong khoảng từ [1-100] 
(sử dụng  hàm rand() để lấy ngẫu nhiên ra số n). 
- Đếm và hiển thị ra màn hình xem có bao nhiêu số lẻ 
- Đếm và hiển thị ra màn hình xem có bao nhiêu số chẵn 
- Đếm và hiển thị ra màn hình xem có bao nhiêu số nguyên tố */
echo "<pre>";
echo "---BT6-- </br>";
$n = rand(1,100);
$dem = 0;
$dem_le = 0;
$dem_chan = 0;
// đếm chẵn, lẻ
for ($i = 1; $i  <= $n ; $i ++) { 
	if ($i % 2 != 0) {
		$dem_le++;
	} else{
		$dem_chan++;
	}
}
// Hàm kiểm tra số nguyên tố
function checkNgTo($n)
{
	$dem = 0;
	for ($i = 1; $i  <= $n ; $i ++) { 
 		$check = true;
 		if ($i < 2) {
 			$check = false;
 		} else {
			for ($j = 2; $j  <= sqrt($i) ; $j ++) { 
	 			if ($i % $j == 0) {
		 			$check = false;
		 			break;
		 		} else {
		 			$check = true;
		 		}
 		}
 		
 	}
	 	if ($check == true) {
	 		$dem++;
	 		// echo $i." | Là số nguyên tố"."</br>";
	 	}
	}
	echo "-Tổng có :  " .$dem." số nguyên tố!";
}


echo "Với n = ".$n."</br>";
echo "-Tổng có : " .$dem_le. " số lẻ! </br>";
echo "-Tổng có : " .$dem_chan. " số chẵn! </br>";
echo checkNgTo($n)."</br>";

echo "<hr>";
?>
<a href="http://localhost/PHP0320E2_BTVN/Buoi1/">Quay lại</a>