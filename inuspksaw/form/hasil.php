<title>PERANGKINGAN DAN HASIL</title>

<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
include "../config/koneksi.php";
echo"<div id='doblock'><center><h2><font color='#FFFFFF'>PERANGKINGAN</font></h2></center>";
echo"<CENTER>
<table> 
  <tr>
    <th><font color='#FFFFFF'>No</th>
	<th><font color='#FFFFFF'>NIM</th>
	<th><font color='#FFFFFF'>Nama</th>
	<th><font color='#FFFFFF'>IPK</th>
	<th><font color='#FFFFFF'>Penghasilan Ortu</th>
	<th><font color='#FFFFFF'>Tanggungan Ortu</th>
	<th><font color='#FFFFFF'>Semester</th>
	<th><font color='#FFFFFF'>Prestasi Akademik</th>
	<th><font color='#FFFFFF'>Prestasi Non Akademik</th>
  </tr></cENTER></div>";
$sql = mysql_query("select * from beasiswa ORDER BY nama");
$no2=1;
while($row = mysql_fetch_array($sql)){
	if($no2 % 2 == 0)
		$bg = "#EAEAEA";
	else
		$bg = "#423143";
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
	//Bagian tanggungan
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
	//Bagian semester
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
	//bagian Prestasi
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
	//Bagian Prestasinon
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
	elseif($row['prestasinon'] > 5){
		$row['prestasinon'] = 100;
	}
	else{
	echo "-";
	}


//--------------------------------------------------------MENCARI NILAI RANKING MAXIMUM--------------------------------------------------------
//BAGIAN IPK
$max_pr = mysql_query("SELECT max(ipk) from beasiswa");
$m_pr = mysql_fetch_row($max_pr);
	if(max($m_pr) <= 1.5){
		$m_pr = 20;
	}
	elseif(max($m_pr) <= 2){
		$m_pr = 35;
	}
	elseif(max($m_pr) <= 2.5){
		$m_pr = 50;
	}
	elseif(max($m_pr) <= 3){
		$m_pr = 70;
	}
	elseif(max($m_pr) <= 3.5){
		$m_pr = 85;
	}
	elseif(max($m_pr) > 3.5){
		$m_pr = 100;
	}
	else{
	echo "-";
	}
//BAGIAN PENGHSILAN
$max_dp = mysql_query("SELECT max(penghasilan) from beasiswa");
$m_dp = mysql_fetch_row($max_dp);
	if(max($m_dp) > 1000000){
		$m_dp = 100;
	}
	elseif(max($m_dp) <= 2000000){
		$m_dp = 85;
	}
	elseif(max($m_dp) <= 3000000){
		$m_dp = 70;
	}
	elseif(max($m_dp) <= 4000000){
		$m_dp = 50;
	}
	elseif(max($m_dp) <= 5000000){
		$m_dp = 35;
	}
	elseif(max($m_dp) > 5000000){
		$m_dp = 20;
	}
	else{
	echo "-";
	}
//BAGIAN TANGGUNGAN
$max_at = mysql_query("SELECT max(tanggungan) from beasiswa");
$m_at = mysql_fetch_row($max_at);
	if(max($m_at) <= 1){
		$m_at = 20;
	}
	elseif(max($m_at) <= 2){
		$m_at = 35;
	}
	elseif(max($m_at) <= 3){
		$m_at = 50;
	}
	elseif(max($m_at) <= 4){
		$m_at = 70;
	}
	elseif(max($m_at) <= 5){
		$m_at = 85;
	}
	elseif(max($m_at) > 5){
		$m_at = 100;
	}
	else{
	echo "-";
	}
//BAGIAN SEMESTER
$max_ab = mysql_query("SELECT max(semester) from beasiswa");
$m_ab = mysql_fetch_row($max_ab);
	if(max($m_ab) <= 1){
		$m_ab = 20;
	}
	elseif(max($m_ab) <= 2){
		$m_ab = 35;
	}
	elseif(max($m_ab) <= 3){
		$m_ab = 50;
	}
	elseif(max($m_ab) <= 4){
		$m_ab = 70;
	}
	elseif(max($m_ab) <= 5){
		$m_ab = 85;
	}
	elseif(max($m_ab) > 5){
		$m_ab = 100;
	}
	else{
	echo "-";
	}
//BAGIAN PRESTASI AKADEMIK
$max_ly = mysql_query("SELECT max(prestasi) from beasiswa");
$m_ly = mysql_fetch_row($max_ly);
	if(max($m_ly) <= 1){
		$m_ly = 20;
	}
	elseif(max($m_ly) <= 2){
		$m_ly = 35;
	}
	elseif(max($m_ly) <= 3){
		$m_ly = 50;
	}
	elseif(max($m_ly) <= 4){
		$m_ly = 70;
	}
	elseif(max($m_ly) <= 5){
		$m_ly = 85;
	}
	elseif(max($m_ly) > 5){
		$m_ly = 100;
	}
	else{
	echo "-";
	}
//BAGIAN PRESTASI NON
$max_mt = mysql_query("SELECT max(prestasinon) from beasiswa");
$m_mt = mysql_fetch_row($max_mt);
	if(max($m_mt) <= 1){
		$m_mt = 20;
	}
	elseif(max($m_mt) <= 2){
		$m_mt = 35;
	}
	elseif(max($m_mt) <= 3){
		$m_mt = 50;
	}
	elseif(max($m_mt) <= 4){
		$m_mt = 70;
	}
	elseif(max($m_mt) <= 5){
		$m_mt = 85;
	}
	elseif(max($m_mt) > 5){
		$m_mt = 100;
	}
	else{
	echo "-";
	}


echo"
  <tr bgcolor='$bg'>
    <td>$no2</td>
	<td class='kiri'>$row[nim]</td>
	<td class='kiri'>".ucwords ($row['nama'])."</td>
	<td>$row[ipk]</td>
	<td>$row[penghasilan]</td>
	<td>$row[tanggungan]</td>
	<td>$row[semester]</td>
	<td>$row[prestasi]</td>
	<td>$row[prestasinon]</td>
  </tr>";
$no2++;
}
echo"
	<tr>
		<td></td><td colspan=2 class=kiri><b>RANKING MAX</b></td>
		<td><b>$m_pr</b></td>
		<td><b>$m_dp</b></td>
		<td><b>$m_at</b></td>
		<td><b>$m_ab</b></td>
		<td><b>$m_ly</b></td>
		<td><b>$m_mt</b></td>
	</tr></table>";
			
echo"<div id='soblock'>
	<center>
	<h2><FONT COLOR='#FFFFFF'>HASIL PENGHITUNGAN</h2>
	<table>
		<tr>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Hasil</th>
<th>Status</th>
		</tr></center></font></div>";
	$sql = mysql_query ("select * from beasiswa ORDER BY nama");
	$no=1;
	while($row = mysql_fetch_array($sql)){
	if($no % 2 == 0)
		$bg = "#423143";
	else
		$bg = "#FFFFFF";
	//Perankingan
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
	//Bagian tanggungan
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
	//Bagian semester
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
	//bagian Prestasi
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
	//Bagian Prestasinon
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
	elseif($row['prestasinon'] > 5){
		$row['prestasinon'] = 100;
	}
	else{
	echo "-";
	}

//--------------------------------------------------------MENCARI NILAI RANKING MAXIMUM--------------------------------------------------------
//BAGIAN PRESTASI
$max_pr = mysql_query("SELECT max(ipk) from beasiswa");
$m_pr = mysql_fetch_row($max_pr);
	if(max($m_pr) <= 1.5){
		$m_pr = 20;
	}
	elseif(max($m_pr) <= 2){
		$m_pr = 35;
	}
	elseif(max($m_pr) <= 2.5){
		$m_pr = 50;
	}
	elseif(max($m_pr) <= 3){
		$m_pr = 70;
	}
	elseif(max($m_pr) <= 3.5){
		$m_pr = 85;
	}
	elseif(max($m_pr) > 3.5){
		$m_pr = 100;
	}
	else{
	echo "-";
	}
//BAGIAN PENGHSILAN
$max_dp = mysql_query("SELECT max(penghasilan) from beasiswa");
$m_dp = mysql_fetch_row($max_dp);
	if(max($m_dp) > 1000000){
		$m_dp = 100;
	}
	elseif(max($m_dp) <= 2000000){
		$m_dp = 85;
	}
	elseif(max($m_dp) <= 3000000){
		$m_dp = 70;
	}
	elseif(max($m_dp) <= 4000000){
		$m_dp = 50;
	}
	elseif(max($m_dp) <= 5000000){
		$m_dp = 35;
	}
	elseif(max($m_dp) > 5000000){
		$m_dp = 20;
	}
	else{
	echo "-";
	}
//BAGIAN TANGGUNGAN
$max_at = mysql_query("SELECT max(tanggungan) from beasiswa");
$m_at = mysql_fetch_row($max_at);
	if(max($m_at) <= 1){
		$m_at = 20;
	}
	elseif(max($m_at) <= 2){
		$m_at = 35;
	}
	elseif(max($m_at) <= 3){
		$m_at = 50;
	}
	elseif(max($m_at) <= 4){
		$m_at = 70;
	}
	elseif(max($m_at) <= 5){
		$m_at = 85;
	}
	elseif(max($m_at) > 5){
		$m_at = 100;
	}
	else{
	echo "-";
	}
//BAGIAN SEMESTER
$max_ab = mysql_query("SELECT max(semester) from beasiswa");
$m_ab = mysql_fetch_row($max_ab);
	if(max($m_ab) <= 1){
		$m_ab = 20;
	}
	elseif(max($m_ab) <= 2){
		$m_ab = 35;
	}
	elseif(max($m_ab) <= 3){
		$m_ab = 50;
	}
	elseif(max($m_ab) <= 4){
		$m_ab = 70;
	}
	elseif(max($m_ab) <= 5){
		$m_ab = 85;
	}
	elseif(max($m_ab) > 5){
		$m_ab = 100;
	}
	else{
	echo "-";
	}
//BAGIAN PRESTASI AKADEMIK
$max_ly = mysql_query("SELECT max(prestasi) from beasiswa");
$m_ly = mysql_fetch_row($max_ly);
	if(max($m_ly) <= 1){
		$m_ly = 20;
	}
	elseif(max($m_ly) <= 2){
		$m_ly = 35;
	}
	elseif(max($m_ly) <= 3){
		$m_ly = 50;
	}
	elseif(max($m_ly) <= 4){
		$m_ly = 70;
	}
	elseif(max($m_ly) <= 5){
		$m_ly = 85;
	}
	elseif(max($m_ly) > 5){
		$m_ly = 100;
	}
	else{
	echo "-";
	}
//BAGIAN PRESTASI NON
$max_mt = mysql_query("SELECT max(prestasinon) from beasiswa");
$m_mt = mysql_fetch_row($max_mt);
	if(max($m_mt) <= 1){
		$m_mt = 20;
	}
	elseif(max($m_mt) <= 2){
		$m_mt = 35;
	}
	elseif(max($m_mt) <= 3){
		$m_mt = 50;
	}
	elseif(max($m_mt) <= 4){
		$m_mt = 70;
	}
	elseif(max($m_mt) <= 5){
		$m_mt = 85;
	}
	elseif(max($m_mt) > 5){
		$m_mt = 100;
	}
	else{
	echo "-";
	}

	$sql2 = mysql_query("select * from bobot");
	$b = mysql_fetch_array($sql2);

$hasil_pr = ($row['ipk']/$m_pr*$b['bipk'])+($row['penghasilan']/$m_dp*$b['bpenghasilan'])+($row['tanggungan']/$m_at*$b['btanggungan'])+
			($row['semester']/$m_ab*$b['bsemester'])+($row['prestasi']/$m_ly*$b['bprestasi'])+($row['prestasinon']/$m_mt*$b['bprestasinon']);
if($hasil_pr <=80 ){
		$stat = "TIDAK BERHAK";
	}
	elseif($hasil_pr <= 90 ){
		$stat = "DIPERTIMBANGKAN";
	}
	elseif($hasil_pr <= 100){
		$stat = "MENDAPAT BEASISWA";
	}
	else{
	$stat = "DATA TIDAK BENAR";
	}
		
	echo"
		<tr bgcolor = '$bg'>
			<td>$no</td><td class=kiri>$row[nim]</td><td class=kiri>".ucwords ($row['nama'])."</td><td>$hasil_pr</td><td>$stat</td>
		</tr>	";
		$no++;
		}
	echo"</table>";
}

?>