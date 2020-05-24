<a href="http://localhost/PHP0320E2_BTVN/Buoi2/">Quay lại trang chủ</a>
<hr>
<?php 
/*
n: là một số cho trước được lấy ngẫu nhiên trong khoảng từ [10-50] (sử dụng hàm rand() để lấy
ngẫu nhiên ra số n).
+1,  Khởi tạo 1 mảng ($arr) lưu các giá trị từ [1 – n].
+2,  Hiển thị số n ra ngoài màn hình và các  phần tử trong mảng $arr
+3,  Đếm xem có bao nhiêu số chẵn và lẻ trong mảng $arr
+4,  Tìm số lớn nhất và nhỏ nhất trong mảng
+5,  Hiển thị các số nguyên tố trong mảng ra ngoài màn hình
+6,  Nếu trong mảng có các phần tử là số chẵn thì sẽ thay thế bằng chuỗi “đã thay thế” và hiển thị lại
mảng $arr ra ngoài màn hình
+7,  Xóa phần tử đầu, phần tử cuối và hiển thị lại mảng $arr
+8,  Xóa phần tử tại vị trí m, trong đó m là số ngẫu nhiên [1 – 10], hiển thị mảng trước khi xóa và sau hki
xóa ra ngoài màn hình

*/

$n = rand(10,50);
$dem_chan = 0;
$dem_le = 0;	

/*1, Khởi tạo 1 mảng ($arr) lưu các giá trị từ [1 – n].*/
$arr = array();
for ($i = 1; $i  <= $n ; $i ++) { 
	array_push($arr, $i);
	if ($i % 2 == 0) {
		$dem_chan++;
	}else {
		$dem_le++;
	}
}

// Hàm Checkngto
function SoNgTo($n)
{
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
			echo $i." | ";
		}
	}
}

/*2, Hiển thị số n ra ngoài màn hình và các  phần tử trong mảng $arr*/
echo "Với N = ".$n;
echo "<pre>";
echo "Các giá trị mới của mảng được thêm là :</br>";
print_r($arr);

/*3,  Đếm xem có bao nhiêu số chẵn và lẻ trong mảng $arr*/
// Đếm số chẵn.
echo "=> Tổng có : ";
print_r($dem_chan);
echo " số chẵn trong mảng! </br>";

// Đếm số lẻ.
echo "=> Tổng có : ";
print_r($dem_le);
echo " số lẻ trong mảng! </br>";

/*4,  Tìm số lớn nhất và nhỏ nhất trong mảng*/
// Max
echo "=> Số lớn nhất trong mảng là : ";
print_r(max($arr));
echo "</br>";

// Min
echo "=> Số nhỏ nhất trong mảng là : ";
print_r(min($arr));
echo "</br>";

/*5,  Hiển thị các số nguyên tố trong mảng ra ngoài màn hình*/
echo "=> Các số nguyên tố trong mảng là : </br>";
echo SoNgTo($n);

/*6,  Nếu trong mảng có các phần tử là số chẵn 
	- thì sẽ thay thế bằng chuỗi “đã thay thế” 
	- hiển thị lại mảng $arr ra ngoài màn hình*/
for ($i = 1; $i  < $n ; $i ++) { 
	if ($arr[$i] % 2 !== 0) {
		$arr[$i] = "'Đã thay thế'</br>";
	}
}
echo "<pre>";
echo "=> Mảng sau khi được thay thế </br>";
print_r($arr);
echo "</pre> </br>";

/*7,  Xóa phần tử đầu, phần tử cuối và hiển thị lại mảng $arr*/
/*Delete first*/
array_shift($arr);
echo "<pre>";
echo "=> Mảng sau khi xóa phần tử đầu tiên. </br>";
print_r($arr);
echo "</pre> </br>";

/*Delete Last*/
array_pop($arr);
echo "<pre>";
echo "=> Mảng sau khi xóa phần tử cuối cùng. </br>";
print_r($arr);
echo "</pre> </br>";
echo "</pre>";

// 8, Xóa phần tử tại vị trí thứ m[1-10];
$n = 10;
$m = rand(1,10);
$new_array = array();
for ($i = 0; $i  <= $n ; $i ++) { 
	array_push($new_array, $i);
}

// Show.
echo "=> Với M = ".$m;
echo "<pre>";
echo "=> Mảng trước khi xóa.</br>";
print_r($new_array);
echo "</pre> </br>";

// Xóa phần tử theo mong muốn => unset($ten_mang_muon_xoa[index]);
unset($new_array[$m]);

echo "<pre>";
echo "=> Mảng sau khi xóa.</br>";
print_r($new_array);
echo "</pre> </br>";

 ?>