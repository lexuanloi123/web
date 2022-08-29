
<?php

$heso_a = "";
$heso_b = "";
$heso_c = "";

if (isset ( $_POST ['heso_a'] )) {
    $heso_a = $_POST ['heso_a'];
}
if (isset ( $_POST ['heso_b'] )) {
    $heso_b = $_POST ['heso_b'];
}
if (isset ( $_POST ['heso_c'] )) {
    $heso_c = $_POST ['heso_c'];
}

function tamGiac($a, $b, $c) {
    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;
    
        if( $a<$b+$c && $b<$a+$c && $c<$a+$b ){
            if( $a*$a==$b*$b+$c*$c || $b*$b==$a*$a+$c*$c || $c*$c== $a*$a+$b*$b)
                echo"tam giác vuông";
            else if($a==$b && $b==$c)
                echo"tam giác đều";
            else if($a==$b || $a==$c || $b==$c)
                echo"tam giác cân";
            else if($a*$a > $b*$b+$c*$c || $b*$b > $a*$a+$c*$c || $c*$c > $a*$a+$b*$b)    
                echo"tam giác tù";
            else
                echo"tam giác nhọn";
        }
        else
            echo" a, b, c không phải cạnh của tam giác";
}
?>
<form action="#" method="post">
 <table>
  <tr>
   <td>Nhập hệ số a</td>
   <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
  </tr>
  <tr>
   <td>Nhập hệ số b</td>
   <td><input type="text" name="heso_b" value="<?=$heso_b?>" /></td>
  </tr>
  <tr>
   <td>Nhập hệ số c</td>
   <td><input type="text" name="heso_c" value="<?=$heso_c?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
<br>
<?php

if (is_numeric ( $GLOBALS ['heso_a'] ) && is_numeric ( $GLOBALS ['heso_b'] ) 
        && is_numeric ( $GLOBALS ['heso_c'] )) {
    tamGiac ( $GLOBALS ['heso_a'], $GLOBALS ['heso_b'], $GLOBALS ['heso_c'] );
} else {
    echo ("Vui lòng nhập các giá trị vào ô trống!");
}
?>