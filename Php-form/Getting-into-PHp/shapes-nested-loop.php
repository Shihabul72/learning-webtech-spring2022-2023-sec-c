<?php
//for the first pic for *
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo "* ";
    }
    echo "<br>";
  }
  
//for the second pic for number
for ($k = 1; $k <= 3; $k++) {
    for ($l = 1; $l <= $k; $l++) {
      echo $l;
    }
    echo "<br>";
  }

//3rd pic for alphabet

$alpha = 'A';
for ($m = 1; $m <= 3; $m++) {
  for ($n = 1; $n <= $m; $j++) {
    echo $alpha++." ";
  }
  echo "<br>";
}


?>