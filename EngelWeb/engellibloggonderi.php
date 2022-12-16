<?php 

$mail=$_POST["mail"];

$engelligonderi=$_POST["engelligonderi"];

$baglan=mysqli_connect("localhost","root","","engelliweb");

$ekle="insert into engelligonderi(mail,engelligonderi) value('".$mail."','".$engelligonderi."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Fikirlerinizi diğer insanlarla paylaştığınız için teşekkür ederiz...";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}

?>