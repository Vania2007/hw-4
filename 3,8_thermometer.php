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
        text-align: center;
        width: 30px;
        border: 3px solid;
      }
    </style>
  </head>
  <body>
EOD;

echo "<table>";
$t = rand(-20, 20);
$bg;
for ($i = 20; $i >= -20; $i--) {
    $i <= $t ? $bg = "red" : $bg = "yellow";
    echo "<tr><td>$i&deg;C</td><td style = 'background: $bg;'></td></tr>";
}
echo "</table>";
echo <<<EOD
  </body>
</html>
EOD;
