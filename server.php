<?php

include __DIR__ . '/database.php';

$sql = "SELECT * FROM 'stanze'";
$results = $conn->query($sql);

if($results && $results->num_rows >0) {
  $rooms = [];


  // se i risultati sono > 0
  while($row = $results->fetch_assoc()) {

    $rooms[] = $row;
  }

} elseif($results) {

  // risultati = 0
  $rooms = [];
} else {
  die('errore')
}
$conn->close();
 ?>
