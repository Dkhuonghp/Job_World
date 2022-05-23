


<!-- localhost là host của xampp  -->
<!-- root username đăng nhập vào-->

<?php
// $db = array(
//     'server'=>'localhost',
//     'username'=>'root',
//     'password'=>'',
//     'dbname'=>'user'
// );


// kết nối đến sever
$connect=mysqli_connect("localhost","root","") or die('loi ket noi den sever');

// lựa chọn cơ cở dữ liệu 
$db=mysqli_select_db($connect,"dangnhap") or die('loi truy cap');

// truy vấn 
// $qr=mysqli_query('select form user') or die('loi tuy van');

echo"ket noi thanh cong"

// $connect=mysqli_connect($db['server'],$db['username'],$db['password'],$db['dbname']);
// if(!$connect){
//     die('ket noi khong thanh cong' . mysqli_connect_error($connect));
// }
// echo "ket noi thanh cong"

?>