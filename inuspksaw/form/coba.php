<?php

session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else
{
include "../config/koneksi.php";

echo"<h2>Perankingan.</h2>";
echo"
<table> 
  <tr>
    <th>No</th>
	<th>NIM</th
	><th>Nama</th>
	<th>IPK</th>
	<th>Penghasilan Ortu</th>
	<th>Tanggungan Ortu</th>
	<th>Semester</th>
	<th>Prestasi Akademik</th>
	<th>Prestasi Non Akademik</th>
  </tr>";
  
$sql = mysql_query("select * from beasiswa ORDER BY nama");
$no2=1;
while($row = mysql_fetch_array($sql)){
	if($no2 % 2 == 0)
		$bg = "#EAEAEA";
	else
		$bg = "#FFFFFF";
		
//Bagian ipk	
	if($row['ipk'] <= 1.5){
		$row['ipk'] = 20;
	}
	elseif($row['ipk'] <= 2){
		$row['ipk'] = 35;
	}
	elseif($row['ipk'] <= 2.5){
		$row['ipk'] = 50;
	}
	elseif($row['ipk'] <= 3){
		$row['ipk'] = 70;
	}
	elseif($row['ipk'] <= 3.5){
		$row['ipk'] = 85;
	}
	elseif($row['ipk'] > 3.5){
		$row['ipk'] = 100;
	}
	else{
	echo "-";
	}
}}

?>
<div id="block"> </div>