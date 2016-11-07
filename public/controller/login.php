<?php
	include('../../config/config.php');
	include('../view/login.php');
	if(isset($_POST['login'])){
		$masv = $_POST['masv'];
		$pass = $_POST['pass'];
		include('../model/user.php');
		if(login($masv,$pass) == 1){
			$_SESSION['loged'] =1;
			
			header('location: ../../member/controller/member.php');
		}else{
			echo "ngu";
		}
	}
?>