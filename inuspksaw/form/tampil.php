<title>DATA KANDIDAT</title>
<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
echo"<center><FONT COLOR='#ffffff'>
<h2>DATA KANDIDAT</h2></FONT>
<table> 
  <tr>
    <th>No</th>
	<th>NIM</th>
	<th>Nama</th>
	<th>IPK</th>
	<th>Penghasilan Ortu</th>
	<th>Tanggungan Ortu</th>
	<th>Semester</th>
	<th>Prestasi Akademik</th>
	<th>Prestasi Non Akademik</th>
  </tr></center>";
include "config/koneksi.php";
$sql=mysql_query("SELECT * from beasiswa");
$no=1;
//$m = mysql_query("select min(disiplin) from karyawan");
while($r=mysql_fetch_array($sql)){
if($no%2==0)
$bg="#FFFFFF";
else
$bg="#423143";

echo"
  <tr bgcolor='$bg'>
    <td>$no</td><td class='kiri'>$r[nim]</td><td class='kiri'>$r[nama]</td><td>$r[ipk]</td>
    <td>$r[penghasilan]</td><td>$r[tanggungan]</td><td>$r[semester]</td><td>$r[prestasi]</td><td>$r[prestasinon]</td>
  </tr>";
$no++;
}
}
//BAGIAN PRESTASI
echo "<tr bgcolor='#e4e4e4'>
<td></td><td colspan=2><b><div class='kiri'>NILAI MAX</div></b></td>
<td>";
$max_pr = mysql_query("SELECT max(ipk) from beasiswa");
$m_pr = mysql_fetch_row($max_pr);
echo max($m_pr);
echo "</td>
<td>";
//BAGIAN DISIPLIN
$max_dp = mysql_query("SELECT max(penghasilan) from beasiswa");
$m_dp = mysql_fetch_row($max_dp);
echo max($m_dp);
echo "</td>
<td>";
//BAGIAN ATTITUDE
$max_at = mysql_query("SELECT max(tanggungan) from beasiswa");
$m_at = mysql_fetch_row($max_at);
echo max($m_at);
echo "</td>
<td>";
//BAGIAN ABSENSI
$max_ab = mysql_query("SELECT max(semester) from beasiswa");
$m_ab = mysql_fetch_row($max_ab);
echo max($m_ab);
echo "</td>
<td>";
//BAGIAN LOYALITAS
$max_ly = mysql_query("SELECT max(prestasi) from beasiswa");
$m_ly = mysql_fetch_row($max_ly);
echo max($m_ly);
echo "</td>
<td>";
//BAGIAN MENTALITAS
$max_mt = mysql_query("SELECT max(prestasinon) from beasiswa");
$m_mt = mysql_fetch_row($max_mt);
echo max($m_mt);
echo "</td>
</tr>";
echo"</table><br>";


echo"
<table> 
  <tr>
    <th>No</th><th>NIM</th><th>Nama</th><th>IPK</th><th>Penghasilan Ortu</th><th>Tanggungan Ortu</th><th>Semester</th><th>Prestasi Akademik</th><th>Prestasi Non Akademik</th>
  </tr>";
$sql2 = mysql_query("SELECT * from beasiswa");
$no2=1;
while($row = mysql_fetch_array($sql2)){
if($no2 % 2 == 0)
$bg2 = "#423143";
else
$bg2 = "#FFFFFF";
//Bagian IPK	
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
	elseif($row['ipk'] <= 4){
		$row['ipk'] = 100;
	}
	else{
	echo "-";
	}
	

	//Bagian penghasilan
		if($row['penghasilan'] <= 1000000){
		$row['penghasilan'] = 100;
	}
	elseif($row['penghasilan'] <= 2000000){
		$row['penghasilan'] = 85;
	}
	elseif($row['penghasilan'] <= 3000000){
		$row['penghasilan'] = 70;
	}
	elseif($row['penghasilan'] <= 4000000){
		$row['penghasilan'] = 50;
	}
	elseif($row['penghasilan'] <= 5000000){
		$row['penghasilan'] = 35;
	}
	elseif($row['penghasilan'] > 5000000){
		$row['penghasilan'] = 20;
	}
	else{
	echo "-";
	}
	//Bagian Semester
		if($row['tanggungan'] <= 1){
		$row['tanggungan'] = 20;
	}
	elseif($row['tanggungan'] <= 2){
		$row['tanggungan'] = 35;
	}
	elseif($row['tanggungan'] <= 3){
		$row['tanggungan'] = 50;
	}
	elseif($row['tanggungan'] <= 4){
		$row['tanggungan'] = 70;
	}
	elseif($row['tanggungan'] <= 5){
		$row['tanggungan'] = 85;
	}
	elseif($row['tanggungan'] > 5){
		$row['tanggungan'] = 100;
	}
	else{
	echo "-";
	}
	//Bagian Semester
		if($row['semester'] <= 1){
		$row['semester'] = 20;
	}
	elseif($row['semester'] <= 2){
		$row['semester'] = 35;
	}
	elseif($row['semester'] <= 3){
		$row['semester'] = 50;
	}
	elseif($row['semester'] <= 4){
		$row['semester'] = 70;
	}
	elseif($row['semester'] <= 5){
		$row['semester'] = 85;
	}
	elseif($row['semester'] > 5){
		$row['semester'] = 100;
	}
	else{
	echo "-";
	}
	//bagian prestasi
		if($row['prestasi'] <= 1){
		$row['prestasi'] = 20;
	}
	elseif($row['prestasi'] <= 2){
		$row['prestasi'] = 35;
	}
	elseif($row['prestasi'] <= 3){
		$row['prestasi'] = 50;
	}
	elseif($row['prestasi'] <= 4){
		$row['prestasi'] = 70;
	}
	elseif($row['prestasi'] <= 5){
		$row['prestasi'] = 85;
	}
	elseif($row['prestasi'] > 5){
		$row['prestasi'] = 100;
	}
	else{
	echo "-";
	}
	//Bagian prestasinon
		if($row['prestasinon'] <= 1){
		$row['prestasinon'] = 20;
	}
	elseif($row['prestasinon'] <= 2){
		$row['prestasinon'] = 35;
	}
	elseif($row['prestasinon'] <= 3){
		$row['prestasinon'] = 50;
	}
	elseif($row['prestasinon'] <= 4){
		$row['prestasinon'] = 70;
	}
	elseif($row['prestasinon'] <= 5){
		$row['prestasinon'] = 85;
	}
	elseif($row['prestasinon'] >5){
		$row['prestasinon'] = 100;
	}
	else{
	echo "-";
	}

echo"
  <tr bgcolor='$bg2'>
    <td>$no2</td><td class='kiri'>$row[nim]</td><td class='kiri'>$row[nama]</td><td>$row[ipk]</td><td>$row[penghasilan]</td><td>$row[tanggungan]</td><td>$row[semester]</td><td>$row[prestasi]</td><td>$row[prestasinon]</td>
  </tr>";
$no2++;
}
echo"</table>";

?>



