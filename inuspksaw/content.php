<?php
include "config/koneksi.php";

//Bagian Home
if ($_GET['spk']=='home'){
	echo "<img src='img/itunpam.jpg'/>";
   }
   elseif ($_GET['spk']=='input'){
   	include "input.php";
	
   }
   elseif ($_GET['spk']=='bobot'){
   	include "form/bobot.php";
	}
   elseif ($_GET['spk']=='tampil'){
    include "form/tampil.php";
	}
   elseif ($_GET['spk']=='hasil'){
    include "form/hasil.php";
	}
   elseif ($_GET['spk']=='coba'){
    include "form/coba.php";
	}
   elseif ($_GET['inu7tplpd']=='bebet'){
    include "form/bebet.php";
	}
   elseif ($_GET['inu7tplpd']=='bebet'){
    include "cek_login.php";
   }
   else{
    echo "<b>Maaf Halaman Tidak Ditemukan.</b>";
   }   
   ?> 