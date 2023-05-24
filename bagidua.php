<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bagi Dua</title>
</head>
<body>
  <form method="post" action="">
  <table border =1 bgcolor=gray>
	  <tr> 
    <td><label for=""></label>Petunjuk!!!</td>
</tr>
<tr> 
    <td><label for=""></label>Isi setiap kofisien dengan menggunakan angka</td>
</tr>

  
</table>



	

	  
	<br></br>
    <table align=center bgcolor=#af913d border=1>
    <tr>
        <td><label for=""></label>	<h1>Input Persamaan polinomial derajat 5 <BR> <b>(Ax^5+Bx^4+Cx^3+Dx^2+Ex+F)</b></h></td>
       
      </tr>

	  <tr>
        <td><label for=""></label>Koefisien A</td>
        <td><input type="text" name="A" value=""></td>
      </tr>
      <tr>
        <td><label for=""></label>Koefisien B</td>
        <td><input type="text" name="B" value=""></td>
      </tr>
      <tr>
        <td><label for=""></label>Koefisien C</td>
        <td><input type="text" name="C" value=""></td>
      </tr>
	  <tr>
        <td><label for=""></label>Koefisien D</td>
        <td><input type="text" name="D" value=""></td>
      </tr>
	  <tr>
        <td><label for=""></label>Koefisien E</td>
        <td><input type="text" name="E" value=""></td>
      </tr>
	  <tr>
        <td><label for=""></label>Konstanta F</td>
        <td><input type="text" name="F" value=""></td>
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
  $A=$_POST['A'];
	  $B=$_POST['B'];
	  $C=$_POST['C'];
	  $D=$_POST['D'];
	  $E=$_POST['E'];
	  $F=$_POST['F'];
	
  function f($x,$A,$B,$C,$D,$E,$F){
	 
   $f=$A*pow($x,5)+$B*pow($x,4)+$C*pow($x,3)+$D*pow($x,2)+$E*pow($x,1)+$F ;
   return $f;
  } 
  echo"<h1><center>Pencarian akar dengan Metode Bagi Dua</h1>";
  echo"Nilai penaksiran a : $a <br>";
  echo"Nilai penaksiran b : $b <br>";
  echo"Galat : $e <hr>";
  $fa=f($a,$A,$B,$C,$D,$E,$F);
  $fb=f($b,$A,$B,$C,$D,$E,$F);
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

    $fb=f($b,$A,$B,$C,$D,$E,$F);
    $fx=f($x,$A,$B,$C,$D,$E,$F);
    $hasil=$fb*$fx;
   
  if($hasil==0){
    $akar=$x;
    echo"hasil akar adalah $akar";
    }
  else{
   echo"
   <table border=1 width=100% id=table1 style=border-width: 0px>
   <tr>
    <td width=35 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>No</font></b></td>
    <td width=141 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>a</font></b></td>
    <td width=199 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>b</font></b></td>
    <td width=185 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>x</font></b></td>
    <td style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>F(a)</font></b></td>
    <td style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>F(b)</font></b></td>
    <td style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>F(x)</font></b></td>
   </tr>";
   $s=abs($fx);
   while($s>=$e){
   $x=($b+$a)/2;
   $fa=f($a,$A,$B,$C,$D,$E,$F);
   $fb=f($b,$A,$B,$C,$D,$E,$F);
   $fx=f($x,$A,$B,$C,$D,$E,$F);
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
    <td colspan=2 align=center height=33 bgcolor=#af913d><b>
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