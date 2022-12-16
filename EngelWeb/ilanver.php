<?php 

$mail=$_POST["mail"];

$ilangonderi=$_POST["ilangonderi"];

$baglan=mysqli_connect("localhost","root","","engelliweb");

$ekle="insert into ilangonderi(mail,ilangonderi) value('".$mail."','".$ilangonderi."')";

if ($baglan->query($ekle) === TRUE) 
{
    echo "Fikirlerinizi diğer insanlarla paylaştığınız için teşekkür ederiz...";
} 
else 
{
   echo "Hata: " . $ekle. "<br>" . $baglan->error;
}
?>