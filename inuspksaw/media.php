<?php
session_start();
error_reporting(0);
include "timeout.php";

if($_SESSION[login]==1){
	if(!cek_login()){
		$_SESSION[login] = 0;
	}
}
if($_SESSION[login]==0){
  header('location:logout.php');
}
else{
if (empty($_SESSION['username']) AND empty($_SESSION['passuser']) AND $_SESSION['login']==0){
  echo "<center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>
<link rel="stylesheet" type="text/css" href="media.css" />
<link rel="stylesheet" type="text/css" href="pure.css" />
<center><a class="pure-button pure-button-primary" href="http://localhost/inuspksaw/media.php?spk=input">Input Data</a>
<a class="pure-button pure-button-primary" href="http://localhost/inuspksaw/media.php?inu7tplpd=bebet">Input Bobot</button> </a>
<a class="pure-button pure-button-primary" href="http://localhost/inuspksaw/media.php?spk=tampil">Lihat Data</a>
<a class="pure-button pure-button-primary" href="http://localhost/inuspksaw/media.php?spk=hasil">Lihat Hasil</button> </a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></a></center>
<?php
include "content.php";}}?> </td>
 
</table>
<br />
<center><a class="pure-button pure-button-primary" href="logout.php">Log Out</a></center>
<br />
<center>
<td height="27" colspan="3" align="center">©2014 Muhammad Wisnu 7D</td><td></td></center>


<br />

