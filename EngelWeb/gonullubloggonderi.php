<?php 

$mail=$_POST["mail"];

$gonullubloggonderi=$_POST["gonullubloggonderi"];

$baglan=mysqli_connect("localhost","root","","engelliweb");

$ekle="insert into gonullugonderi(mail,gonullugonderi) value('".$mail."','".$gonullubloggonderi."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Fikirlerinizi diğer insanlarla paylaştığınız için teşekkür ederiz...";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}

?>