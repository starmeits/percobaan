<!DOCTYPE html>
<html lang="en">
<head>
  <title>Titik tetap</title>
</head>
<body>
  <form method="post" action="">
	
    <table align=center bgcolor=#af913d border=1>
    <tr>
        <td><label for=""></label><b>f(x)=x^2-3x+1</b></td></tr>
      <tr>
        <td><label for=""></label>Tebakan awal</td>
        <td><input type="text" name="a" value=""></td>
      </tr>
      <tr>
        <td><label for="">Epsilon</label></td>
        <td><input type="text" name="e" value=""></td>
      </tr>
      <tr>
        <td><button name="kirim">kirim</button></td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
if(isset($_POST['kirim'])) {
  $a=$_POST['a'];
  $e=$_POST['e'];
  function f($x){
   $f=(3*$x-1)/$x;
   return $f;
  }
  echo"<h1><center>Pencarian akar dengan Metode Titik Tetap</h1>";
  echo"Nilai penaksiran a : $a <br>";
  $fa=f($a);
  $fb=f($fa);
   
  if($fa==$fb){
    $akar=$fa;
    echo"hasil akar adalah $akar";
    }
  else {
   echo"
   <table border=1 width=100% id=table1 style=border-width: 0px>
   <tr>
    <td width=35 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>No</font></b></td>
    <td width=141 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>Xn</font></b></td>
    <td width=199 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>|Xn-1-Xn|</font></b></td>
   </tr>";
    $s=abs($fa-$fb);
    $k=1;
   while($s>$e){
   $x=$fb;
   $x1=f($x);
   $s=abs($x-$x1);
   $fb=$x1;
       echo"
    <tr>
    <td width=35 style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$k</font></td>
    <td width=141 style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$x</font></td>
    <td width=199 style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$s</font></td>
    </tr>
       ";
      $k++;
   }
   echo"</table>";
   }
  $k1=$k-1;
  echo"
  <table border=1 width=100% id=table1 cellspacing=0 height=166>
   <tr>
    <td colspan=2 align=center height=33 bgcolor=#af913d><b>
    <font face=Verdana size=6>Kesimpulan Metode Titik Tetap</font></b></td>
   </tr>
   <tr>
    <td width=34%><font face=Verdana>Nilai Akar</font></td>
    <td width=64%><font face=Verdana>&nbsp;$x1</font></td>
   </tr>
   <tr>
    <td width=34%><font face=Verdana>Jumlah Iterasi</font></td>
    <td width=64%><font face=Verdana>&nbsp;$k1</font></td>
   </tr>
  </table>
  ";
} 
?>