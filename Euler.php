<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bagi Dua</title>
</head>
<body>
  <form method="post" action="">
	Input Persamaan Euler <BR> <b>e^x + C</b>
	

	  
	
    <table>
	  <tr>
        <td><label for=""></label>Konstanta C</td>
        <td><input type="text" name="C" value=""></td>
      </tr>
     
      <tr>
        <td><label for=""></label>Nilai a</td>
        <td><input type="text" name="a" value=""></td>
      </tr>
      <tr>
        <td><label for=""></label>Nilai b</td>
        <td><input type="text" name="b" value=""></td>
      </tr>
      <tr>
        <td><label for="">Galat</label></td>
        <td><input type="text" name="e" value=""></td>
      </tr>
      <tr>
		<td></td>
        <td><button name="kirim2">Hitung</button></td>
      </tr>
    </table>
  </form>
</body>
</html>
<?php
if(isset($_POST['kirim2'])) {
  $a=$_POST['a'];
  $b=$_POST['b'];
  $e=$_POST['e'];
	  $C=$_POST['C'];
	  
	
  function f($x,$C){
	 
   $f=exp($x)+$C;
   return $f;
  }
  echo"<h1><center>Pencarian akar dengan Metode Bagi Dua</h1>";
  echo"Nilai penaksiran a : $a <br>";
  echo"Nilai penaksiran b : $b <br>";
  echo"Galat : $e <hr>";
  $fa=f($a,$C);
  $fb=f($b,$C);
  $fab=$fa * $fb;
    if($fab>=0){
      $x='tidak ada';
      $k=0;
     echo" $a dan $b <br>";
    echo"Nilai f(a).f(b) > 0<br>Silakan lakukan penginputan Ulang";
    }
    else{
    $k=1;
    $x=($b+$a)/2;

    $fb=f($b,$C);
    $fx=f($x,$C);
    $hasil=$fb*$fx;
   
  if($hasil==0){
    $akar=$x;
    echo"hasil akar adalah $akar";
    }
  else{
   echo"
   <table border=1 width=100% id=table1 style=border-width: 0px>
   <tr>
    <td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
    <b><font size=2 face=Verdana>No</font></b></td>
    <td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
    <b><font size=2 face=Verdana>a</font></b></td>
    <td width=199 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
    <b><font size=2 face=Verdana>b</font></b></td>
    <td width=185 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
    <b><font size=2 face=Verdana>x</font></b></td>
    <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
    <b><font size=2 face=Verdana>F(a)</font></b></td>
    <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
    <b><font size=2 face=Verdana>F(b)</font></b></td>
    <td style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
    <b><font size=2 face=Verdana>F(x)</font></b></td>
   </tr>";
   $s=abs($fx);
   while($s>=$e){
   $x=($b+$a)/2;
   $fa=f($a,$C);
   $fb=f($b,$C);
   $fx=f($x,$C);
   $hasil=$fb*$fx;
       echo"
       <tr>
    <td width=35 style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$k</font></td>
    <td width=141 style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$a</font></td>
    <td width=199 style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$b</font></td>
    <td width=185 style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$x</font></td>
    <td style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$fa</font></td>
    <td style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$fb</font></td>
    <td style=border-style: none; border-width: medium>
    <font face=Verdana size=2>$fx</font></td>
   </tr>
       ";
    if($hasil<0){
    $a=$x;
       }
      else{
    $b=$x;
       }
      $k++;
      $s=abs($fx);
   }
   echo"</table>";
   }
  }
  $k1=$k-1;
  echo"
  <table border=1 width=100% id=table1 cellspacing=0 height=166>
   <tr>
    <td colspan=2 align=center height=33 bgcolor=#00FF00><b>
    <font face=Verdana size=6>Kesimpulan Metode Bagi Dua</font></b></td>
   </tr>
   <tr>
    <td width=34%><font face=Verdana>Nilai Taksiran Atas</font></td>
    <td width=64%><font face=Verdana>&nbsp;$a</font></td>
   </tr>
   <tr>
    <td width=34%><font face=Verdana>Nilai Taksiran Bawah</font></td>
    <td width=64%><font face=Verdana>&nbsp;$b</font></td>
   </tr>
   <tr>
    <td width=34%><font face=Verdana>Jumlah Iterasi</font></td>
    <td width=64%><font face=Verdana>&nbsp;$k1</font></td>
   </tr>
   <tr>
    <td width=34%><font face=Verdana>Nilai Akar yang ditemukan</font></td>
    <td width=64%><font face=Verdana>&nbsp;$x</font></td>
   </tr>
  </table>
  ";
  }
?>