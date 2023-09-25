<?php 

// Task 5: Password Generator

function generatePassword($length) {
  $text = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890(!@#$%^&*()_+)";
  $randomText = str_shuffle($text);
  $password = substr($randomText,0,$length);
  echo $password;
}

generatePassword(12);




