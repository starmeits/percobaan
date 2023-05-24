<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bagi Dua</title>
</head>
<body>
  <form method="post" action="">
	Input Persamaan polinomial derajat 5 <BR> <b>Ax^5+Bx^4+Cx^3+Dx^2+Ex+F</b>
	

	  
	
    <table>
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
        <td><label for=""></label>Banyaknya Perubahan Tanda f(x)</td>
        <td><input type="text" name="U" value=""></td>
      </tr>
      <tr>
        <td><label for=""></label>Banyaknya Perubahan Tanda f(-x)</td>
        <td><input type="text" name="V" value=""></td>
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
  $U=$_POST['U'];
  $V=$_POST['V'];
  $A=$_POST['A'];
  $B=$_POST['B'];
  $C=$_POST['C'];
  $D=$_POST['D'];
  $E=$_POST['E'];
  $F=$_POST['F'];

  echo"<h1><center>Lokalisasi Akar-Akar polinomial</h1>";
  echo"Dengan Aturan Tanda Descartes";
  $n=0;
  
  $un=$U-$n;
  while($un>=0){
	  $n1=2*$n;
	  $un=$U-$n1;
	  $n++;
	  
  }
  $n2=$n-1;
  echo"<table>
  <tr><td>Kemungkinan Akar Real Positif Paling Banyak Adalah</td><td>$n2</td></tr>
  </table>";
  
  $m=0;
  
  $vm=$V-$m;
  while($vm>=0){
	  $m1=2*$m;
	  $vm=$V-$m1;
	  $m++;
	  
  }
  $m2=$m-1;
  echo"<table>
  <tr><td>Kemungkinan Akar Real Negatif Paling Banyak Adalah</td><td>$m2</td></tr>
  </table>";
  
  $o=5-$n2-$m2;
  echo"<table>
  <tr><td>Kemungkinan Akar Imajiner Paling Banyak Adalah</td><td>$o</td></tr>
  </table>";
  
	  $r1=1+abs($A/$A);
	  $r2=1+abs($B/$A);
	  $r3=1+abs($C/$A);
	  $r4=1+abs($D/$A);
	  $r5=1+abs($E/$A);
	  $r6=1+abs($F/$A);
	if ($r1 > $r2 && $r3 && $r4 && $r5 && $r6 ){
		
		function f($x,$A,$B,$C,$D,$E,$F){
	 
			$f=$A*pow($x,5)+ $B*pow($x,4)+ $C*pow($x,3)+ $D*pow($x,2)+ $E*pow($x,1)+$F;
			return $f;
		}	
			echo"<table border=1 width=50% id=table1 style=border-width: 0px>
				   <tr>
					<td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai x</font></b></td>
					<td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai f(x)</font></b></td>
					
				   </tr>";
			$i=-1*$r1;
			$i2=$r1+1;
			while($i<$i2){
				$f=f($i,$A,$B,$C,$D,$E,$F);
						echo"
							<tr>
							<td width=35 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$i</font></td>
							<td width=141 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$f</font></td>
						   </tr>";
						
				$i++;
			}echo"</table>";
			
    }elseif($r2 > $r1 && $r3 && $r4 && $r5 && $r6 ){
		
		function f($x,$A,$B,$C,$D,$E,$F){
	 
			$f=$A*pow($x,5)+ $B*pow($x,4)+ $C*pow($x,3)+ $D*pow($x,2)+ $E*pow($x,1)+$F;
			return $f;
		}	
			echo"<table border=1 width=50% id=table1 style=border-width: 0px>
				   <tr>
					<td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai x</font></b></td>
					<td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai f(x)</font></b></td>
					
				   </tr>";
			$i=-1*$r2;
			$i2=$r2+1;
			while($i<$i2){
				$f=f($i,$A,$B,$C,$D,$E,$F);
						echo"
							<tr>
							<td width=35 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$i</font></td>
							<td width=141 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$f</font></td>
						   </tr>";
						
				$i++;
			}echo"</table>";
	}elseif($r3 > $r1 && $r2 && $r4 && $r5 && $r6 ){
		
		function f($x,$A,$B,$C,$D,$E,$F){
	 
			$f=$A*pow($x,5)+ $B*pow($x,4)+ $C*pow($x,3)+ $D*pow($x,2)+ $E*pow($x,1)+$F;
			return $f;
		}	
			echo"<table border=1 width=50% id=table1 style=border-width: 0px>
				   <tr>
					<td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai x</font></b></td>
					<td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai f(x)</font></b></td>
					
				   </tr>";
			$i=-1*$r3;
			$i2=$r3+1;
			while($i<$i2){
				$f=f($i,$A,$B,$C,$D,$E,$F);
						echo"
							<tr>
							<td width=35 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$i</font></td>
							<td width=141 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$f</font></td>
						   </tr>";
						
				$i++;
			}echo"</table>";
	}elseif($r4 > $r1 && $r2 && $r3 && $r5 && $r6 ){
		
		function f($x,$A,$B,$C,$D,$E,$F){
	 
			$f=$A*pow($x,5)+ $B*pow($x,4)+ $C*pow($x,3)+ $D*pow($x,2)+ $E*pow($x,1)+$F;
			return $f;
		}	
			echo"<table border=1 width=50% id=table1 style=border-width: 0px>
				   <tr>
					<td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai x</font></b></td>
					<td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai f(x)</font></b></td>
					
				   </tr>";
			$i=-1*$r4;
			$i2=$r4+1;
			while($i<$i2){
				$f=f($i,$A,$B,$C,$D,$E,$F);
						echo"
							<tr>
							<td width=35 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$i</font></td>
							<td width=141 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$f</font></td>
						   </tr>";
						
				$i++;
			}echo"</table>";
	}elseif($r5 > $r1 && $r2 && $r3 && $r5 && $r6 ){
		
		function f($x,$A,$B,$C,$D,$E,$F){
	 
			$f=$A*pow($x,5)+ $B*pow($x,4)+ $C*pow($x,3)+ $D*pow($x,2)+ $E*pow($x,1)+$F;
			return $f;
		}	
			echo"<table border=1 width=50% id=table1 style=border-width: 0px>
				   <tr>
					<td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai x</font></b></td>
					<td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai f(x)</font></b></td>
					
				   </tr>";
			$i=-1*$r5;
			$i2=$r5+1;
			while($i<$i2){
				$f=f($i,$A,$B,$C,$D,$E,$F);
						echo"
							<tr>
							<td width=35 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$i</font></td>
							<td width=141 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$f</font></td>
						   </tr>";
						
				$i++;
			}echo"</table>";
	}else{
		function f($x,$A,$B,$C,$D,$E,$F){
	 
			$f=$A*pow($x,5)+ $B*pow($x,4)+ $C*pow($x,3)+ $D*pow($x,2)+ $E*pow($x,1)+$F;
			return $f;
		}	
			echo"<table border=1 width=50% id=table1 style=border-width: 0px>
				   <tr>
					<td width=35 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai x</font></b></td>
					<td width=141 style=border-style: none; border-width: medium bgcolor=#00FF00 align=center>
					<b><font size=2 face=Verdana>Nilai f(x)</font></b></td>
					
				   </tr>";
			$i=-1*$r6;
			$i2=$r6+1;
			while($i<$i2){
				$f=f($i,$A,$B,$C,$D,$E,$F);
						echo"
							<tr>
							<td width=35 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$i</font></td>
							<td width=141 style=border-style: none; border-width: medium>
							<font face=Verdana size=2>$f</font></td>
						   </tr>";
						
				$i++;
			}echo"</table>";
	}
}

?>