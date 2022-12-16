<?php 

$mail=$_POST["mail"];

$engellisikayet=$_POST["engellisikayet"];

$baglan=mysqli_connect("localhost","root","","engelliweb");

$ekle="insert into engellisikayet(mail,engellisikayet) value('".$mail."','".$engellisikayet."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Fikirlerinizi diğer insanlarla paylaştığınız için teşekkür ederiz...";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}

?>