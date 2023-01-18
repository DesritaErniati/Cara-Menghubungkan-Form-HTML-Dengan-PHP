<?php
$konek=mysqli_connect("localhost","root","","db_json");
if($konek){
		// echo "berhasill";
	}else{
		echo '<script>window.alert("tidak terkoneksi")</script>'; 
	}