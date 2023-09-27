<?php 

// Task 4: Multidimensional Array

$studentGrades = [
  "Student1" => ["Math" => 85, "English" => 78, "Science" => 80],
  "Student2" => ["Math" => 88, "English" => 95, "Science" => 90],
  "Student3" => ["Math" => 70, "English" => 80, "Science" => 75]
];

function averageStudentGrades($studentGrades) {
  foreach($studentGrades as $student => $grades) {
    $averageMark = array_sum($grades) / count($grades);
    if ($averageMark >= 90) {
      echo "Average Grade of {$student} is A+\n";
    }elseif($averageMark >= 80) {
      echo "Average Grade of {$student} is A\n";
    }elseif($averageMark >= 70) {
      echo "Average Grade of {$student} is B\n";
    }elseif($averageMark >= 60) {
      echo "Average Grade of {$student} is C\n";
    }else {
      echo "Average Grade of {$student} is F\n";
    }
  }
}

averageStudentGrades($studentGrades);
