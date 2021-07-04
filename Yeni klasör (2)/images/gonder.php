<?php include("baglann.php") ;





     $uye_adi= $_POST['isim'];
     $uye_sifre= $_POST['sifre'];
     $uye_eposta= $_POST['mail'];
	 
     $sql = "INSERT INTO uyeler (adi, sifre, mail) VALUES ($uye_adi,$uye_sifre,$uye_eposta)";
         if (mysqli_query($conn, $sql)) {
           echo "New record create successfully";
        }        
             
            mysqli_close($conn);
	  


?>
