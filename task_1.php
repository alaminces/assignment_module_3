<?php 

// Task 1: String Manipulation

$text = "The quick brown fox jumps over the lazy dog.";

function stringManipulation($text) {
  $lowerText = strtolower($text);
  $textReplaced = str_replace("brown","red",$lowerText);
  echo $textReplaced;
}

stringManipulation($text);