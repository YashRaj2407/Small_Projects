<?php

$name=$_POST['name'];
$roll=$_POST['roll'];
$dept=$_POST['dept'];
$marks=$_POST['marks'];


$data="Name: $name<br> Roll: $roll<br>Department: $dept<br> marks: $marks<br>----------------<br>";


echo "<h2>Thank you, $name!</h2><br><br>";
echo"$data<br><br>";

echo "<p>your details have been saved successfully.</p>";


?>