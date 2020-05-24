<?php 

/*BT5. Viết chương trình thực hiện các yêu cầu sau: 
- Với số n là số ngẫu nhiên trong khoảng từ [1-10] 
(sử dụng  hàm rand() để lấy ngẫu nhiên ra số n). 
- Tính giai thừa và in kết quả ra màn hình? 
- Kiểm tra xem số n có phải là số nguyên tố hay không? */
echo "<pre>";
echo "---BT5--- </br>";
// $a = 0;
// $b = 1;
// $c = 5;
$x = rand(1,10);
// Hàm tính giai thừa
 function tinhGiaiThua($x)
{
	$giai_thua = 1;
	if ($x == 0 || $x == 1) {
		return $giai_thua;
	} else {
		for ($i = 2; $i  <= $x ; $i ++) { 
			$giai_thua *= $i;
		}
		return $giai_thua;
	}
}

// Hàm kiểm tra số nguyên tố
function checkSoNgto($x)
{
	$check = true;
	if ($x < 2) {
		$check = false;
	} else {
		for ($i = 2; $i  <= sqrt($x) ; $i ++) { 
			if ($x % $i == 0) {
				$check = false;
				break;
			} else {
				$check = true;
			}
		}
	}
	
	if ($check == true) {
		echo $x. " Là số nguyên tố </br>";
	} else {
		echo $x. " Không phải là số nguyên tố </br>";
	}
}

// kiểm tra số nguyên tố
echo "Với X = ".$x."</br> ";
echo checkSoNgto($x);
// tính giai thừa
echo "Giai thừa của ".$x." là: ".tinhGiaiThua($x)."</br>";

echo "<hr>";
?>
<a href="http://localhost/PHP0320E2_BTVN/Buoi1/">Quay lại</a>