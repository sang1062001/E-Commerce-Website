<?php
include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$name = "/^[a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";
//echo $f_name;

if (empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2) ) {
    echo "
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Làm ơn điên hết dòng..!</b>
    </div>
    ";
    exit();
} else {
// validate frist name
if (!preg_match($name,$f_name)) {
    echo "
    <div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
		<b>this $f_name không hợp lệ..!</b>
	</div>
    ";
    exit();
}
// validate last name
if (!preg_match($name,$l_name)) {
    echo "
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <b>this $l_name không hợp lệ..!</b>
    </div
    ";
    exit();
}
// email validation
if (!preg_match($emailValidation,$email)) {
    echo "
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <b>this $email không hợp lệ..!</b>
    </div>
    ";
    exit();
}
// password
if(strlen($password) < 9 ){
    echo "
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <b>Mật khẩu yếu quá!</b>
    </div>
    ";
    exit();
}
if(strlen($repassword) < 9 ){
    echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	<b>Mật khẩu yếu quá!</b>
    </div>
    ";
    exit();
}
// check password and repassword are match
if ($password != $repassword) {
    echo "
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <b>Mật khẩu không trùng khớp, điền cho giống!</b>
    </div
    ";
}
//mobile number validation
if (!preg_match($number,$mobile)) {
    echo "
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <b>Mobile number $mobile không hợp lệ</b>
    </div>
    ";
    exit();
}
if(!(strlen($mobile) == 10)){
    echo "
	<div class='alert alert-warning'>
	<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	<b>Số điện thoại phải 10 số trở lên</b>
	</div>
    ";
    exit();
}
// check existing email
$sql = "SELECT user_id FROM user_info WHERE email ='$email' LIMIT 1";
$check_query = mysqli_query($con ,$sql );
$count_email = mysqli_num_rows($check_query);
if ($count_email > 0 ) {
    echo "
    <div class='alert alert-danger'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    <b>Email này đã được đăng ký rồi!</b>
    </div>
    ";
    exit();
} else {
    $password = md5($password);
    $sql = "INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`, `address2`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
        '$password', '$mobile', '$address1', '$address2')";
    $run_query = mysqli_query($con,$sql);
    if ($run_query) {
        echo "
        <div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>ĐĂNG KÝ THÀNH CÔNG...!!!</b>
        </div>
        ";
    }
}
}

?>