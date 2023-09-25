<?php 

// Task 2: Array Manipulation


function removeEvenNumber($numbers) {
  $resultArray = [];
  foreach($numbers as $number) {
    if ($number % 2 != 0):
      $resultArray[] = $number;
     endif;
  }

  print_r($resultArray);
}

$numbers = range(1,10);

removeEvenNumber($numbers);