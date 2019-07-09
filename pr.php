<?php
/*declare(strict_types=1);

function addnumber (int $a , int $b){
    return $a + $b;

}
echo addnumber (5, "5 days");
*/

declare (srtrict_types=1);

function setheight(int $minheight = 50){
    echo "the height is $minheight <br>";
}
setheight (350);
setheight();
setheight(135);
setheight(80);


function sum(int $x , int $y){
  $z= $x + $y;
  return $z;
}

echo "5+10=" . sum (5,10) . "<br>";
echo "7+13=" . sum (7,13) . "<br>";
echo "2+10=" . sum (2,10) . "<br>";

function add(float $x , float $y):float {
  return $x + $y;
}
echo add(1.2, 5.3);
echo "<br>";


function adds(float $x , float $y):int {
  return  $x + $y;
}
echo adds(1.2, 5.3);
echo "<br>";

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>
