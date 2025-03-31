<!DOCTYPE html>
<html>
<head>
<title>Bàn cờ vua PHP</title>
<style>
  table {
    border-collapse: collapse;
    border: 1px solid black;
    margin: 0 auto;
  }
  td {
    width: 50px;
    height: 50px;
  }
  .white {
    background-color: white;
  }
  .black {
    background-color: black;
  }
</style>
</head>
<body>

<table>
  <?php

  for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
      $class = (($row + $col) % 2 == 0) ? "black" : "white";
      echo "<td class='$class'></td>";
    }
    echo "</tr>";
  }
  ?>
</table>

</body>
</html>