<?php
$koneksi = mysqli_connect 
			(
				"10.0.0.141",
				"admin",
				"Yuyunnailufar20*",
				"crud"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
