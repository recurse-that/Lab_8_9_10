<?php

$length = 100;
$i = 1;
$j = 1;

echo nl2br("Multiplication table: \r\n");
for($i=1; $i<=$length; $i++) {
	echo ("<td> " .$i * $j. " </td>") ;	
}
echo nl2br("\r\n");
for($i=1; $i<=$length; $i++) {
  echo "<tr>";
  for($j=1; $j<=$length; $j++) {
    echo nl2br("<td> " .$i * $j. " </td>") ;
  echo "</tr>";
  }
  echo ("<p> </p>");
}

?>
