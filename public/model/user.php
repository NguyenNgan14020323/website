<?php
	function login($u,$p){
		$qr = mysql_query("SELECT * from hocvien where masv='$u' and pass='$p'");
		return mysql_num_rows($qr);
	}
	// function doipass($old,$new){
	// 	$sql = mysql_query(query)
	// }
	// function getRole($u,$p){
	// 	$qr = mysql_query("SELECT * from hocvien ")
	// }
?>