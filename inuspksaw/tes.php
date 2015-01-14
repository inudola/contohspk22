<?php
include "config/koneksi.php";
$sql = mysql_query("SELECT min(prestasi) from karyawan");
$r=mysql_fetch_row($sql);
$max=max($r);
echo $max;
echo "<br>";

$cari = mysql_query("Select prestasi from karyawan");
$no=0;
while($dapat=mysql_fetch_row($cari)){
$hasil = $dapat[0];
$ok = $hasil / $max;
$no++;
echo $no." ".$ok."<br>";
}
$a = 7;
$b = 10;
$c = $a /$b;
echo"<br> hasil c ".$c."<br>";

$cari = mysql_query("Select prestasi from karyawan");
$no=0;
$array=0;
while($dapat=mysql_fetch_row($cari)){
//$hasil = $dapat[$array++];
//$ok = $hasil / $max;
$no++;
echo $no." ".$dapat[0]."<br>";
}
?>

<?
echo '<br> adalah';
$aa = 7.2;
$bb = 10.2;
$cc = $aa +$bb;
echo $cc;
?>