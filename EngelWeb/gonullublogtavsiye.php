<?php 

$mail=$_POST["mail"];

$gonullublogtavsiye=$_POST["gonullublogtavsiye"];

$baglan=mysqli_connect("localhost","root","","engelliweb");

$ekle="insert into gonullublogtavsiye(mail,gonullublogtavsiye) value('".$mail."','".$gonullublogtavsiye."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Fikirlerinizi diğer insanlarla paylaştığınız için teşekkür ederiz...";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}

?>