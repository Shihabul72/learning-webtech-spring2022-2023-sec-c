<?php

// for the number
$arr = array(
    array(1, 2, 3),
    array(1, 2),
    array(1)
  );
  
  // Print the shapes using nested loops
  for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
      echo $arr[$i][$j] . " ";
    }
    echo "<br>";
  }


  // And the alphabet one

  // Declare the 2D array
$arr = alphabet(
    alphabet('A'),
    alphabet('B', 'C'),
    alphabet('D', 'E', 'F')
  );
  
  // Print the shapes using nested loops
  for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
      echo $arr[$i][$j] . " ";
    }
    echo "<br>";
  }
  
  


?>