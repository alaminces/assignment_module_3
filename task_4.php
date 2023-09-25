<?php 

// Task 4: Multidimensional Array

$studentGrades = [
  "Student1" => ["Math" => 85, "English" => 78, "Science" => 80],
  "Student2" => ["Math" => 88, "English" => 95, "Science" => 90],
  "Student3" => ["Math" => 70, "English" => 80, "Science" => 75]
];

function averageStudentGrades($studentGrades) {
  foreach($studentGrades as $student => $grades) {
    $average = array_sum($grades) / count($grades);
    echo "Average Grade of {$student} : {$average}\n";
  }
}

averageStudentGrades($studentGrades);