
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập hệ thống</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<script src="../bootstrap/js/jquery-2.2.4.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="width: 100%">
	<div class="row" style="margin-top:200px;">
		<div class="col-md-4"></div>
		<div class="col-md-4" style="border: 2px solid red;  border-radius: 15px;">
			<form class="form-horizontal" action="" method="post" class="text-center" style="margin-top: 50px; margin-bottom: 50px;"">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
			    <div class="col-sm-10">
			      <input type="text" name ="masv" class="form-control" id="inputEmail3" placeholder="Username">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			    <div class="col-sm-10">
			      <input type="password" name="pass" class="form-control" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label>
			          <input type="checkbox"> Remember me
			        </label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default" name="login">Sign in</button>
			    </div>
			  </div>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
	</div>
</body>
</html>
