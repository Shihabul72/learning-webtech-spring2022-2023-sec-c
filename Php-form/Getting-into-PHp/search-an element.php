<?php

$numbers = array(10, 20, 30, 40, 50);


$searchNumber = 30;


for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $searchNumber) {
   
        echo "The number " . $searchNumber . " was found in the array.";
        break;
    }
}

if (!in_array($searchNumber, $numbers)) {
    echo "The number " . $searchNumber . " was not found in the array.";
}
?>
