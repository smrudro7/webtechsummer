<?php
echo "1. Area & Perimeter of Rectangle<br>";
echo "2. Calculate VAT<br>";
echo "3. Odd or Even<br>";
echo "4. Largest of Three Numbers<br>";
echo "5. Odd Numbers (10-100)<br>";
echo "6. Search in Array<br>";
echo "7. Print Shapes<br>";
echo "8. 2D Array Shapes<br><br>";

echo "<h3>Task 1: Rectangle</h3>";
$length = 10;
$width = 5;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "Length = $length, Width = $width<br>";
echo "Area = $area<br>";
echo "Perimeter = $perimeter";

echo "<h3>Task 2: VAT</h3>";
$amount = 1000;
$vat = $amount * 0.15;
$total = $amount + $vat;
echo "Amount = $amount<br>";
echo "VAT (15%) = $vat<br>";
echo "Total = $total";

echo "<h3>Task 3: Odd or Even</h3>";
$num = 23;
if($num % 2 == 0){
    echo "$num is Even";
} else {
    echo "$num is Odd";
}

echo "<h3>Task 4: Largest Number</h3>";
$a = 15; $b = 28; $c = 22;
if($a > $b && $a > $c){
    echo "$a is the largest";
} elseif($b > $a && $b > $c){
    echo "$b is the largest";
} else {
    echo "$c is the largest";
}

echo "<h3>Task 5: Odd Numbers (10-100)</h3>";
for($i = 10; $i <= 100; $i++){
    if($i % 2 != 0){
        echo $i . " ";
    }
}

echo "<h3>Task 6: Search in Array</h3>";
$arr = array(5, 10, 15, 20, 25);
$search = 15;
$found = false;
foreach($arr as $value){
    if($value == $search){
        $found = true;
    }
}
if($found){
    echo "$search found in the array";
} else {
    echo "$search not found in the array";
}

echo "<h3>Task 7: Print Shapes</h3>";

for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= $i; $j++){
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";


$count = 1;
for($i = 3; $i >= 1; $i--){
    for($j = 1; $j <= $i; $j++){
        echo $count . " ";
        $count++;
    }
    echo "<br>";
}
echo "<br>";


$ch = 'A';
for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= $i; $j++){
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}

echo "<h3>Task 8: 2D Array Shapes</h3>";
$arr = array(
    array(1,2,3,'A'),
    array(1,2,'B','C'),
    array(1,'D','E','F')
);
foreach($arr as $row){
    foreach($row as $col){
        echo $col . " ";
    }
    echo "<br>";
}
?>
