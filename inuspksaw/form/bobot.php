<?php

echo"<center><font color='#FFFFFF'>
<h2>BOBOT TERSEDIA</h2></font></center>";
echo"<center>
	<table>
	<tr>
		<th>No</th>
		<th>IPK</th>
		<th>Penghasilan Ortu</th>
		<th>Tanggungan</th>
		<th>Semester</th>
		<th>Prestasi Akademik</th>
		<th>Prestasi Non Akademik</th>
	</tr></center>";
		$sql = mysql_query("SELECT * from bobot");
		$no=1;
		while($r=mysql_fetch_array($sql)){
		if($no % 2 == 0)
					$bg='#FFFFFF';
		else
					$bg='#423143';
					
echo"<tr>
			<td>$no</td>
			<td>$r[bipk]</td>
			<td>$r[bpenghasilan]</td>
			<td>$r[btanggungan]</td>
			<td>$r[bsemester]</td>
			<td>$r[bprestasi]</td>
			<td>$r[bprestasinon]</td>
		</tr>";
		}
		echo"</table>";
		$no++;


		
?>