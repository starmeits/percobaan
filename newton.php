<!DOCTYPE html>
<html lang="en">
<head>
  <title>Newton Raphson</title>
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
  $A=$_POST['A'];
  $B=$_POST['B'];
  $C=$_POST['C'];
  $D=$_POST['D'];
  $E=$_POST['E'];
  $F=$_POST['F'];
//fungsi yang akan dicari akarnya
  function f($x,$A,$B,$C,$D,$E,$F){
   $f=$A*pow($x,5)+$B*pow($x,4)+$C*pow($x,3)+$D*pow($x,2)+$E*pow($x,1)+$F ;
   return $f;
   }
  function f1($x,$A,$B,$C,$D,$E){
   $f1=(5*$A)*pow($x,4)+(4*$B)*pow($x,3)+(3*$C)*pow($x,2)+(2*$D)*pow($x,1)+$E ;
   return $f1;
  }
  echo"<h1><center>Pencarian akar dengan Metode Newton Raphson</h1>";
  echo"Tebakan Awal : $a <br>";
//Pengecekan langkah 1
  $fa=f($a,$A,$B,$C,$D,$E,$F);
  $fb=f1($a,$A,$B,$C,$D,$E);
   
  if($fb==0){
    echo "silahkan lakukan penginputan ulang";
    }
  else { 
 //header tabel
   echo"
   <table border=1 width=100% id=table1 style=border-width: 0px>
   <tr>
    <td width=35 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>No</font></b></td>
    <td width=141 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>Xn</font></b></td>
    <td width=199 style=border-style: none; border-width: medium bgcolor=#af913d align=center>
    <b><font size=2 face=Verdana>|Xn-1-Xn|</font></b></td>
   </tr>

   ";
    $k=1;
    $x=$a-($fa/$fb);
    $s=abs($x-$a);
   while($s>$e){
   $x=$a-($fa/$fb);
   $s=abs($x-$a);
   $a=$x;
   $fa=f($a,$A,$B,$C,$D,$E,$F);
   $fb=f1($a,$A,$B,$C,$D,$E);
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
  
  //Kesimpulan hasil iterasi
  $k1=$k-1;
  echo"
  <table border=1 width=100% id=table1 cellspacing=0 height=166>
   <tr>
    <td colspan=2 align=center height=33 bgcolor=#af913d><b>
    <font face=Verdana size=6>Kesimpulan Metode Newton Raphson</font></b></td>
   </tr>
   <tr>
    <td width=34%><font face=Verdana>Nilai Akar</font></td>
    <td width=64%><font face=Verdana>&nbsp;$a</font></td>
   </tr>
   <tr>
    <td width=34%><font face=Verdana>Jumlah Iterasi</font></td>
    <td width=64%><font face=Verdana>&nbsp;$k1</font></td>
   </tr>
  </table>
  ";
}
  
?>