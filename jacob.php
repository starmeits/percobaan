<!DOCTYPE html>
<html lang="en">
<head>
  <title>Metode Jacob</title>
</head>
<body>
  <form method="post" action="">
	Sistem Persamaan Liniear<BR> <b>3 Variabel</b><br></br>
	<table>
		<tr><td>a1x</td><td>+</td><td>b1y</td><td>+</td><td>c1z</td><td>=</td><td>k1</td></tr>
		<tr><td>a2x</td><td>+</td><td>b2y</td><td>+</td><td>c2z</td><td>=</td><td>k2</td></tr>
		<tr><td>a3x</td><td>+</td><td>b3y</td><td>+</td><td>c3z</td><td>=</td><td>k3</td></tr>
	</table>
	<br>
	  
	Input Persamaan
    <table>
	  <tr>
        <td><label for=""></label>Persamaan</td>
        <td><label for=""></label><center>ax</center></td>
		<td><label for=""></label><center>by</center></td>
		<td><label for=""></label><center>cz</center></td>
		<td><label for=""></label><center>k</center></td>
      </tr>
	  <tr>
        <td><label for=""></label>1</td>
        <td><input type="text" name="a1" value=""></td>
		<td><input type="text" name="b1" value=""></td>
		<td><input type="text" name="c1" value=""></td>
		<td><input type="text" name="k1" value=""></td>
      </tr>
      <tr>
        <td><label for=""></label>2</td>
        <td><input type="text" name="a2" value=""></td>
		<td><input type="text" name="b2" value=""></td>
		<td><input type="text" name="c2" value=""></td>
		<td><input type="text" name="k2" value=""></td>
      </tr>
      <tr>
        <td><label for=""></label>3</td>
        <td><input type="text" name="a3" value=""></td>
		<td><input type="text" name="b3" value=""></td>
		<td><input type="text" name="c3" value=""></td>
		<td><input type="text" name="k3" value=""></td>
      </tr>
     
    </table>
	<br></br>
	Nilai Taksiran
	<table>
	<tr>
		<td>x</td>
		<td><input type="text" name="x" value=""></td>
	</tr>
	<tr>
		<td>y</td>
		<td><input type="text" name="y" value=""></td>
	</tr>
	<tr>
		<td>z</td>
		<td><input type="text" name="z" value=""></td>
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
  $x=$_POST['x'];
  $y=$_POST['y'];
  $z=$_POST['z'];
  
  $a1=$_POST['a1'];$a2=$_POST['a2'];$a3=$_POST['a3'];
  $b1=$_POST['b1'];$b2=$_POST['b2'];$b3=$_POST['b3'];
  $c1=$_POST['c1'];$c2=$_POST['c2'];$c3=$_POST['c3'];
  $k1=$_POST['k1'];$k2=$_POST['k2'];$k3=$_POST['k3'];
  
  function f1($y,$z,$a1,$b1,$c1,$k1){ 
   $f1=($k1-$b1*$y-$c1*$z)/$a1;
  return $f1;}
  
  function f2($x,$z,$a2,$b2,$c2,$k2){ 
   $f2=($k2-$a2*$x-$c2*$z)/$b2;
  return $f2;}
  
  function f3($x,$y,$a3,$b3,$c3,$k3){ 
   $f3=($k3-$a3*$x-$b3*$y)/$c3;
  return $f3;}
	 echo"
		<table border=1 width=100% id=table1 style=border-width: 0px>
		<tr>
		<td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
		<b><font size=2 face=Verdana>Iterasi ke</font></b></td>
		<td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
		<b><font size=2 face=Verdana>Nilai x</font></b></td>
		<td width=199 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
		<b><font size=2 face=Verdana>Nilai y</font></b></td>
		<td width=185 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
		<b><font size=2 face=Verdana>Nilai z</font></b></td>
		</tr>";

  for($i=1; $i<=100; $i++){
	
	$x1=f1($y,$z,$a1,$b1,$c1,$k1);
	$y1=f2($x,$z,$a2,$b2,$c2,$k2);
	$z1=f3($x,$y,$a3,$b3,$c3,$k3);
	$x=$x1;
	$y=$y1;
	$z=$z1;
		echo"
       <tr>
		<td width=35 style=border-style: none; border-width: medium>
		<font face=Verdana size=2>$i</font></td>
		<td width=141 style=border-style: none; border-width: medium>
		<font face=Verdana size=2>$x1</font></td>
		<td width=199 style=border-style: none; border-width: medium>
		<font face=Verdana size=2>$y1</font></td>
		<td width=185 style=border-style: none; border-width: medium>
		<font face=Verdana size=2>$z1</font></td>
	   </tr>";
	}echo"</table>";
  
}
?>