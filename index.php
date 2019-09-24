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

?>
