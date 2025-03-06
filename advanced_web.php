<?php

$x = 10;
$y = 7;

$result = [
    "$x + $y = " . ($x + $y),
    "$x - $y = " . ($x - $y),
    "$x * $y = " . ($x * $y),
    "$x / $y = " . ($x / $y),
    "$x % $y = " . ($x % $y)
];

echo implode("<br>", $result) . "<br><hr>";

$month = date('F');
echo ($month === "August") 
    ? "It's August, so it's really hot." 
    : "Not August, so at least not in the peak of the heat.";

echo "<br><hr>";

$squares = [];
for ($i = 1; $i <= 12; $i++) {
    $squares[] = "$i * $i = " . ($i * $i);
}

echo implode("<br>", $squares) . "<br><hr>";

echo "<table border='1' cellspacing='0' cellpadding='5'>";
for ($i = 1; $i <= 7; $i++):
    echo "<tr>";
    for ($j = 1; $j <= 7; $j++):
        echo "<td>" . ($i * $j) . "</td>";
    endfor;
    echo "</tr>";
endfor;
echo "</table>";

?>