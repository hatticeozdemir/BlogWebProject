<?php
include("baglann.php")


   $isim= $_POST["isim"];	
   $sifre= $_POST["sifre"];
   
    $kaydet=$db->preapare("INSERT INTO uyeler SET
      uye_adi:uye_adi,
	  uye_sifre:uye_sifre,
	  uye_eposta:uye_eposta;
	  ");
	$insert=$kaydet->execute(array(
	 'uye_adi' -> $_POST['isim'],
	 'uye_sifre' -> $_POST['sifre'],
	 ));
	 if ($insert){
		 Header("Location:sayfam.php?durum=ok");
	 }
	 else{
		 Header("Location:sayfam.php?durum=no");
	 }

?>