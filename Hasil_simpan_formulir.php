<link rel="stylesheet" type="text/css" href="box_style.css">
<div class="MainBoxPortofolio">
<div class=TextBoxPortofolio>
<?php
//pemroses data inputan form
If (isset($_POST['knfrms'])){
	$nama=$_POST['nm'];
	echo "Nama Anda : <b>$nama</b>";
	$thn_lhr=$_POST['thn'];
	echo "Tahun Kelahiran : <b>$thn_lhr</b>";
	$jns_klmn=$_POST['jk'];
	echo "Jenis Kelamin : <b>$jns_klmn</b>";
	$sts_krj=$_POST['krj'];
	echo "Status Pekerjaan : <b>$sts_krj</b>";
	$pesan=$_POST['psn'];
	echo "Pesan : <b>$pesan</b>";}
?>
</div>
</div>

<div class="MainBox">
	<p><a href="Index.html"><font color="white">Kembali ke beranda.</font></a>
</div>