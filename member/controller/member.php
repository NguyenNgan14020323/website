<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ThesisMgr</title>
	<link rel="stylesheet" type="text/css" href="../../public/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../public/bootstrap/css/mystyle.css">
	<script type="text/javascript" src="../../public/bootstrap/js/jquery-2.2.4.js"></script>
	<script type="text/javascript" src="../../public/bootstrap/js/bootstrap.min.js"></script>
	<!-- bs3-cdn -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<header >	
	<div class="container"  style ="background: #88b77b; width: 100%;height: 120px;">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<a class="navbar-brand" href="#"><img src="../../public/bootstrap/images/uet_logo.png" style="ma"></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse" style="margin-top:27px;">
					<ul class="nav navbar-nav">
						<li ><a href="#">ThisisMgr</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Nguyễn Ngàn<b class="caret"></b></a>
							<ul class="dropdown-menu" aria-labelledby="dropdownMenuDivider">
								<li><a href="#"><i class="fa fa-home"></i> ThesisMgr</a></li>
								<li  role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
								<li><a href="#"><i class="fa fa-commenting-o"></i> Messages</a></li>
								<li><a href="#" id="ngu" onclick="javascript:MC(this)"><i class="fa fa-cog fa-spin" style="font-size:16px"></i> Preferences</a></li>
								<li  role="separator" class="divider"></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Log out</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</div>
</header>
<section>
	<div class="container" style="width: 100%">
		<div class="row">
			<div class="col-md-12">
				<iframe src="../../public/controller/login.php" id="myframe" style="width: 100%; height:500px"></iframe>
				<script type="text/javascript">
					function MC(r){
						
						frm = document.getElementById("myframe");
						if(r.id=="ngu"){
							frm.src = "../../public/controller/doipass.php";
						}else{
							document.witter("ngu su");
						}
						
					}
				</script>
				
			</div>
			
		</div>
	</div>
	
</section>
</body>
</html>