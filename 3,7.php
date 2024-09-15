<?php
echo <<<EOD
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Table</title>
    <style>
    table {
        table-layout: fixed;
        border-collapse: collapse;
        border: 3px solid;
      }

      th,
      td {
        padding: 20px;
        border: 3px solid;
      }
    </style>
  </head>
  <body>
EOD;
echo "<h2>Повна таблиця</h2>";
echo "<table>";
$n = 10;
for ($i = 1; $i < $n; $i++) {
    echo "<tr><td>$i</td><td><img src='./images/img_$i.jpg'></td></tr>";
}
echo "</table></br></br></br></br></br></br>";
echo "<h2>Тільки непарні рядки</h2>";
echo "<table>";
for ($i = 1; $i < $n; $i++) {
    if ($i % 2 != 0) {
        echo "<tr><td>$i</td><td><img src='./images/img_$i.jpg'></td></tr>";
    }
}
echo "</table>";
echo <<<EOD
  </body>
</html>
EOD;
