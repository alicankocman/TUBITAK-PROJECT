<?php 
//Bağlantı sayfamızı include yöntemi ile sayfamıza çekiyoruz.
include ("baglan.php"); 
?>
 <body bgcolor="f2eee3">
<table border="1" width="1525" height="150" bgcolor="#00B5B5" bordercolor="aqua">
    <tr>
        <td>ID</td>
        <td>Mail</td>
        <td>Gönderi</td>
    </tr>
    <?php 
               $conn= mysqli_connect("localhost","root","","engelliweb");
                //Bir mySQL sorgusu ile tüm üyeler tablosunu bir değişkene atıyoruz.
                $verileriCek = mysqli_query ($conn,"select * from gonullugonderi");
               
                //Bu değişken içerisine çekilen tabloyu bir döngü ile b isimli dizi içerisine çekiyoruz.
                while ($b=mysqli_fetch_array($verileriCek)){
                     
                    //Dizi içerisine giriyoruz ve Tablo içerisinden çekilecek olan tüm sütunları tek tek değişken ierisine atıyoruz.
                    $id = $b['id'];
                    $mail = $b['mail'];
                    $gonullugonderi=$b['gonullugonderi'];
                     
                    //Tablonun ikinci satırına denk gelen bu alanda gerekli yerlere bu değişkenleri giriyoruz. 
                    echo "<tr>
                    <td>$id</td>
                    <td>$mail</td>
                    <td>$gonullugonderi</td>
                </tr>";
                     
                }
                 
   ?>
          <center>
           <form action="sonuc.php" method="get">
 Aramak İstediğiniz Mail Yazınız...<input type="text" name="aramasorgusua" placeholder="Aramak istediğiniz kelimeyi yazınız"><br><br>
 <input type="submit" value="Ara"><br><br>
</form>  
     </center>        
</table></body>
<br><br><br>
<form>
    <center>
    <input type="button" onclick="window.location.href = 'index.html'" value="ANASAYFA" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="button" onclick="window.location.href = 'bloggonullu.html'" value="PANEL" class="button">
    </center>
</form>
<style>
  .button {

display: inline-block;

padding: 15px 25px;

font-size: 24px;

cursor: pointer;

text-align: center;

text-decoration: none;

outline: none;

color: #fff;

background-color:#f4511e;

border: none;

border-radius: 15px;

box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {

background-color: #3e8e41;

box-shadow: 0 5px #666;

transform: translateY(4px);
}
</style>