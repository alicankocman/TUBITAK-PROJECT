<?php 

$mail=$_POST["mail"];

$gonullusikayet=$_POST["gonullusikayet"];

$baglan=mysqli_connect("localhost","root","","engelliweb");

$ekle="insert into gonullusikayet(mail,gonullusikayet) value('".$mail."','".$gonullusikayet."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Fikirlerinizi diğer insanlarla paylaştığınız için teşekkür ederiz...";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}
?>