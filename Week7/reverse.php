<?php

$var = "Nii on ju eriti lihtne, aga samas igav.";
echo $var;
echo "</br>";
echo "Tagurpidi: ";
echo strrev($var);
echo "</br>";
echo "</br>";


$var2 = "Proovime siis teistmoodi.";
echo $var2;
$length = strlen($var2);
echo "</br>";
echo "Tagurpidi: ";
for($i=$length-1;$i >=0;$i--){
    echo $var2[$i];
}
