<?php
include "config/koneksi.php";
function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}
$username = anti_injection($_POST['username']);
$pass     = anti_injection(md5($_POST['password']));

// pastikan username dan password merupakan gabungan antara huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
  echo "Maaf anda tidak dapat melakukan injection";
}
else{
$login=mysql_query("SELECT * FROM users WHERE username='$username' AND password='$pass'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

// Apabila username dan password telah cocok atau ditemukan
if ($ketemu > 0){
  session_start();
  include "timeout.php";

  $_SESSION[namauser]     = $r[username];
  $_SESSION[nama] 		  = $r[nama];
  $_SESSION[passuser]     = $r[password];
  
  // session melakukan timeout
  $_SESSION[login] = 1;
  timer();
	$sid_lama = session_id();	
	session_regenerate_id();
	$sid_baru = session_id();
  mysql_query("UPDATE users SET id_session='$sid_baru' WHERE username='$username'");
  header('location:media.php?spk=input');
}
else{
  echo "<div id='block'><center>TIDAK DAPAT LOGIN <br> 
        Username atau Password Anda Salah.<br>
        ULANGI LAGI.<br>";
  echo "<a class='pure-button pure-button-primary' href='logout.php'>KE HALAMAN LOGIN</button> </a>";
}
}
?>
<link rel="stylesheet" type="text/css" href="media.css" />
<link rel="stylesheet" type="text/css" href="pure.css" />
