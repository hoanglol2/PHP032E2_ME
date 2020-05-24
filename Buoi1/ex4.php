<?php 
/*BT4 
4. Viết chương trình thực hiện các yêu cầu sau: 
- x: là một số cho trước được lấy ngẫu nhiên trong khoảng từ  [10-50] (sử dụng hàm rand() để lấy ngẫu nhiên ra số x). 
- Tính giá trị biểu thức: 
F1 = Tổng các số lẻ từ 1 – x 
F2 = (x-1)*2 + m 
- Trong đó: 
- Nếu x là số lẻ thì m = (x+1)/2; 
- Nếu x là số chẵn thì m = x/2 + 1; 
Hiển thị ra màn hình số x và giá trị của biểu thức F = F1 + F2. 
*/
echo "<pre>";
echo "---BT4--- </br>";
$x = rand(10,50);
echo "Với X = ".$x."</br>";
$m = 0;
$f = 0;
$f1 = 0;
$f2 = 0;
// tính f1 = ?
for ($i = 1; $i  <= $x ; $i ++) { 
	if ($i % 2 != 0) {
		$f1 += $i;
	}
}

// tính m = ?
if ($x % 2 != 0) {
	// x là lẻ
	$m = ($x + 1) / 2;
} else {
	// x là chẵn
	$m = ($x / 2) + 1;
}

// tính f2 = ?
$f2 = ($x - 1) * 2 + $m;
// tính f0 = f1 + f2;
$f0 = $f1 + $f2;
// Test
echo "m = ".$m."</br>";
echo "F1 = ".$f1."</br>";
echo "F2 = ".$f2."</br>";
// Hiển thi ra màn hình x, và f = f1 + f2;

echo "- F = F1 + F2 = " .$f0."</br>" ;

echo "<hr>";
?>
<a href="http://localhost/PHP0320E2_BTVN/Buoi1/">Quay lại</a>