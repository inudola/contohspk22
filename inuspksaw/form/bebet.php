<title>INPUT BOBOT</title>







<form method="post" action="<?php echo "form/aksi_spk.php?spk=spk&act=bobot";?>">
			<div id="goblock">
			<CENTER><font color="#FFFFFF">FORM INPUT BOBOT</font></CENTER>
			<input name="bipk" type="text" id="bipk" placeholder="IPK">
			<input name="bpenghasilan" type="text" id="bpenghasilan" placeholder="PENGHASILAN ORANG TUA">
			<input name="btanggungan" type="text" id="btanggungan" placeholder="TANGGUNGAN ANAK">
			<input name="bsemester" type="text" id="bsemester" placeholder="SEMESTER">
			<input name="bprestasi" type="text" id="bprestasi" placeholder="PRESTASI AKADEMIK">
			<input name="bprestasinon" type="text" id="bprestasinon" placeholder="PRESTASI NON AKADEMIK">
			</div>
			<center>
			<input type="reset" name="button" id="submit" value="X" />
			<input type="submit" name="button" id="submit" value="->" />
			</center></form>
			<?
			
			?>
			 <?php include "bobot.php";?>
    	</div>
