
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Online Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">ĐỒ GIA DỤNG KHOA SANG SỰ</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Trang chủ</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Sản phẩm</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">ĐĂNG KÝ</div>
					<div class="panel-body">
					
					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">Tên</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Họ</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">Mật khẩu</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Xác nhận mật khẩu</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Số điện thoại</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Địa chỉ 1</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Địa chỉ 2</label>
								<input type="text" id="address2" name="address2"class="form-control">
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Đăng ký" type="submit" id="signup_button" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>
						
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>






















