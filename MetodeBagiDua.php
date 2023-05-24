
<h1>
Belajar PHP pada Metode Numerik
</h1>

<?php
function fs($d){
    $fs = pow($d, 2) - 2*$d - 8;
    return $fs;
}

 print 'Belajar Metode bagi Dua<br>';
 echo 'Kelas A1';

 // Sintax Metode Bagi dua
 // Persamaan f(x) = x^2 - 2x - 8 = 0
 echo '<br><br>Persamaanya adalah : x^2 - 2x - 8 = 0';
 echo '<br>Syarat metode bagi dua adalah:';
 echo '<br>Menentukan nilai a dan b sehingga f(a) * f(b) < 0';
 $brs = 200;
 $eps = 0.0000001;
 echo '<br>Epsilon ='.$eps;
 $a = 3;
 $b = 6;
 $fa = fs($a);
 $fb = fs($b);
 echo '<br><br>Nilai a='.$a.', <br>nilai b='.$b;
 echo '<br>nilai fa='.$fa;
 echo '<br>Nilai fb='.$fb;
if($fa*$fb<0){
    echo '<br><br>Titik a dan titik b dapat digunakan';

    echo '<table border=1>';
    echo '<tr><td>No</td><td>a</td><td>b</td><td>c</td><td>f(a)</td><td>f(b)</td><td>f(c)</td></tr>';
    
    for ($i=1; $i<=$brs; $i++)
    {
    $fa = fs($a);
    $fb = fs($b);
    $c = ($a + $b)/2;
    $fc = fs($c);
    echo '<tr><td>'.$i.'</td><td>'.$a.'</td><td>'.$b.'</td><td>'.$c.'</td><td>'.$fa.'</td><td>'.$fb.'</td><td>'.$fc.'</td></tr>';

        if($fa*$fc<0)
        {
            $b = $c;
        } else {
            $a = $c;
        }
        if(abs($fc)<$eps){
            break;
        }
    }
  echo '</table>';

    echo '<br><br>Akar dari persamaan diatas adalah:'.$c.', dengan nilai fungsi ='.$fc;

 } else {
    echo '<br><br>Opsss..., nilai a dan b Tidak dapat digunakan';
 }

?>