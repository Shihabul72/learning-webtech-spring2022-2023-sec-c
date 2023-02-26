<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   </head>
   <body>
   <form method='post'>
   <h2>1.Name:</h2>
 <input type="text" name="name">
 <br>
 <input type="submit" value="Submit">
 </form>


 
<?php

$name = $_POST['name'];
echo "<h3> Your Name Is :  $name </h3>";

?>
</body>
</html>
