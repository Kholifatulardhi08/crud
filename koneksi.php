<?php
$koneksi = mysqli_connect 
			(
				"10.0.0.123",
				"uts",
				"Kholifatulardli08*",
				"uts"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
