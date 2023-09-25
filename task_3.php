<?php 

// Task 3: Array Sorting  

$grades = [85, 92, 78, 88, 95];

function sortGradesByDescending($grades) {
  rsort($grades);
  print_r($grades);
}

sortGradesByDescending($grades);