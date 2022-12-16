<body bgcolor="f2eee3">
<?php
$conn= mysqli_connect("localhost","root","","engelliweb");
$aramasorgusu = mysqli_real_escape_string($conn,$_GET['aramasorgusua']);
$sonucsorgu =mysqli_query($conn,"SELECT * FROM gonullugonderi WHERE mail LIKE '%".$aramasorgusu."%'" );
if(mysqli_num_rows($sonucsorgu)>0){
 while($sorguoku=mysqli_fetch_array($sonucsorgu)){
  echo "Arama Sonucu Çıkan id"," ", $sorguoku['id'].'<br>';
  echo "Arama Sonucu Açığa Çıkan mail"," ", $sorguoku['mail'].'<br>';
  echo "Arama Sonucu Açığa Çıkan engelligonderi"," ", $sorguoku['gonullugonderi'].'<br>';
 }
}
else{
 echo 'Aradığınız İçerik Bulunamadı';
}
?>
</body>
<center>
<form><br><br><br><br><br><br>
<input type="button" onclick="window.location.href = 'bloggonullu.html'" value="Geri Gel" class="button">
</form>
</center>
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