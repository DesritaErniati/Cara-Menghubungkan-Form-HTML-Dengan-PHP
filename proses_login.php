=<?php
$pengguna=$_POST["user_name"];
$password=$_POST["password"];
include "koneksi.php";
$kueri=mysqli_query($konek,'SELECT * FROM login1 WHERE nama="'.$pengguna.'" AND katasandi="'.$password.'"');
if(mysqli_num_rows($kueri)>0){
	// ini nanti di redirect ke halaman utama
	header("location:beranda.html");
}else{
		// ini nanti di redirect ke halaman login
	header("location:login.html");	
}
