<?php
/* Thomas Gartman
 * EECS 448 Lab04 Exercise 1
 * Make an HTML multiplication table
 * Last editied September 28th, 2018
 */

echo "<table>";
for($i = 0; $i <= 100; $i += 1)
{
    echo "<tr>";
    if($i == 0)
    {
      echo "<td>" . " " . "</td>";
    }
    else
    {
      echo "<td>" . $i . "</td>";
    }
    for($j = 0; $j <= 100; $j += 1)
    {
      if($j == 0)
      {
        echo "<td>" . ${$j + 1} . "</td>";
      }
      elseif($i == 0)
      {
        echo "<td>" . $j . "</td>";
      }
      else
      {
        echo "<td>" . $i * $j . "</td>";
      }
    }
    echo "</tr>";
}
echo "</table>";
?>
