<?php


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
</head>

<body>

<?php

 $n=$_POST['5'];
 $V=1;//визначник

for($i=1;$i<=$n;$i++){
                for($j=1;$j<=$n;$j++){
                $t="e_".$i."_".$j;
                $m[$i][$j]=$_POST[$t];
                }
           }
           echo"<br> До: <br>";
?>

<table border="1" width="300px">
        <?
            for($a=1;$a<=$n;$a++){
                ?> <tr > <?
                //$sum=0;
                for($b=1;$b<=$n;$b++){
                    ?><td width="25%"><?
                    echo $m[$a][$b];
                    //$sum=$sum+$mas[$a][$b];
                    }?>
                </tr> <?
            }
         ?>

</table>
<?

for($j=1;$j<=$n;$j++){//перебір по стовбцях
for($i=1;$i<=$n;$i++){//перебір по рядках
  if($i>$j){//знаходження елементів що нижче діагоналі
  $z=$m[$i][$j]/$m[$j][$j];
  for($b=1;$b<=$n;$b++){
  $h=$m[$j][$b]*$z;
   $m[$i][$b]=$m[$i][$b]-$h;
    }
   }
}}


echo "<br> Після:<br>";
?>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body><table border="1" width="300px">
        <?
            for($a=1;$a<=$n;$a++){
                ?> <tr > <?
                   for($b=1;$b<=$n;$b++){
                    ?><td width="25%"><?
                    echo $m[$a][$b];

                    }?>
                </tr> <?
            }
         ?>

</table>
<?php
for($i=1;$i<=$n;$i++){
$V*=$m[$i][$i];
}
echo "Визначник матриці = ".$V;

?>
</body>
</html>