<?php 

$mail=$_POST["mail"];

$engelliblogtavsiye=$_POST["engelliblogtavsiye"];

$baglan=mysqli_connect("localhost","root","","engelliweb");

$ekle="insert into engelliblogtavsiye(mail,engelliblogtavsiye) value('".$mail."','".$engelliblogtavsiye."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Fikirlerinizi diğer insanlarla paylaştığınız için teşekkür ederiz...";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}

?>