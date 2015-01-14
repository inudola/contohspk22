<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
include "../config/koneksi.php";
$spk=$_GET[spk];
$act=$_GET[act];

// Input Data
if ($spk=='spk' AND $act=='input'){
mysql_query("INSERT into beasiswa(nim, nama, ipk, penghasilan, tanggungan, semester, prestasi, prestasinon)
			VALUES ('$_POST[nim]',
			'$_POST[nama]',
			'$_POST[ipk]',
			'$_POST[penghasilan]',
			'$_POST[tanggungan]',
			'$_POST[semester]',
			'$_POST[prestasi]',
			'$_POST[prestasinon]')");
		header('location:../media.php?spk=tampil');
		}
		
elseif($spk=='spk' AND $act=='bobot'){
mysql_query("INSERT INTO bobot(id_bobot, bipk, bpenghasilan, btanggungan, bsemester, bprestasi, bprestasinon)
			VALUES ('$_POST[id_bobot]',
			'$_POST[bipk]',
			'$_POST[bpenghasilan]',
			'$_POST[btanggungan]',
			'$_POST[bsemester]',
			'$_POST[bprestasi]',
			'$_POST[bprestasinon]')");
		header('location:../media.php?inu7tplpd=bebet');
}

}
		?>