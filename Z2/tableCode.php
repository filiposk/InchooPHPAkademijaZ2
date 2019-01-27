<?php

include_once "input.php";

$string = $_POST['string'];

$integerArray = array_map('intval', explode(',', $string));

sort($integerArray);

$arrayLenght = count($integerArray);

foreach ($integerArray as $key => $value){
    if($value % 2 === 0) {
        $evenArray[] = $value;
    }
}

$ar = (array_sum($integerArray) / $arrayLenght);

sort($evenArray);

$closest=0;
foreach ($evenArray as $item) {
    if ($closest === 0 && $item > $ar) {
        $closest = $item;
    }
}

foreach ($integerArray as $key => $value) {

    if ($value == max($integerArray)) {
        $tableLenght = sqrt($value + 1);
    }
}

$roundedTableLenght = ceil($tableLenght);


echo "<table>";
$y = 1;
for($i = 0; $i < $roundedTableLenght; $i++){
    echo "<tr>";
    for($j = 0;$j < $roundedTableLenght; $j++){
        if(in_array($y,$evenArray) && $y == $closest){
            echo "<td><strong>", $y ,"</strong> </td>";
        }elseif(in_array($y,$evenArray)){
            echo "<td>", $y, "</td>";
        }else{
            echo "<td>" , "</td>";
        }
        $y++;
    }
    echo "</tr>";
}
echo "</table>";