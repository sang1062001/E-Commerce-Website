<?php


session_start();
// session is not set
if (!isset($_SESSION["uid"])) {
header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ONLINE STORE</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
   
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
     integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" 
     crossorigin="anonymous">
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top"> 
    <div class="container-fluid"> 
        <div class="navbar navbar-header"> 
            <a href="index.php" class="navbar-brand"> ĐỒ GIA DỤNG KHOA SANG SỰ</a>
        </div>
        <ul class="nav navbar-nav">
            <li> <a href="index.php"><i class="fas fa-home"></i>Trang chủ</a></li>
            <li> <a href="index.php"><i class="fas fa-store"></i>Sản phẩm</a></li>
        </ul>
        </div>
    </div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<p><br/></p>

<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8" id="cart_msg">
<!-- cart messages -->
</div>
<div class="col-md-8"></div>
</div>

    <div class="row">
        <div class="col-md-2"> </div>
        <div class="col-md-8"> 
            <div class="panel panel-primary">
                <div class="panel-heading">Chi tiết giỏ hàng</div>
                <div class="panel-body">
                    <div class="row"> 
                    <div class="col-md-2"><b>Xóa và sửa</b></div>
                    <div class="col-md-2"><b>Minh họa sản phẩm</b></div>
                    <div class="col-md-2"><b>Tên sản phẩm</b></div>
                    <div class="col-md-2"><b>Giá sản phẩm</b></div>
                    <div class="col-md-2"><b>Số lượng</b></div>
                    <div class="col-md-2"><b>Tổng</b></div>
                    </div>

                <div id="cart_checkout">
                </div>                
                </div>   
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"> </div>
    </div>
</div>

</body>
</html>