<?php
//for the first pic for *
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo "* ";
    }
    echo "<br>";
  }
  
//for the second pic for number
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $j;
    }
    echo "<br>";
  }

//3rd pic for alphabet

$alpha = 'A';
for ($i = 1; $i <= 3; $i++) {
  for ($j = 1; $j <= $i; $j++) {
    echo $alpha++." ";
  }
  echo "<br>";
}


?>