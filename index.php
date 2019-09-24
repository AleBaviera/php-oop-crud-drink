<?php
include 'popo.php';
include 'query.php';
include 'conn.php';

$res = $conn -> query($query_getBevande);

$drinks = [];
if ($res && $res -> num_rows > 0) {

  while ($row = $res -> fetch_assoc()) {

    $drinks[] = new Drink($row);
  }
}


for ($i=0; $i < sizeOf($drinks); $i++) {
    $drink = $drinks[$i];
    echo $drink;
}

echo '<br>------------------------<br><br>';

$minPrice = $drinks[0];
$maxPrice = $drinks[0];
$sumPrice = 0;

for ($i=0; $i < sizeOf($drinks); $i++) {
    $drink = $drinks[$i];

    if ($drink -> getPrice() < $minPrice -> getPrice()) {
      $sumPrice += $drink -> getPrice();
      echo 'min price : ' . $drink;
    };


    if ($drink -> getPrice() > $maxPrice -> getPrice()) {
      $sumPrice += $drink -> getPrice();
      echo 'max price : ' . $drink;
    }





}

echo 'Sum prices: ' . $sumPrice;
?>
