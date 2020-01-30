<?php


$arrA = [5, 7, 13, 42, 57, 84];
$arrB = [3, 6, 7, 13, 38, 45, 57, 62, 85];
$arrC = [];

foreach ($arrA as $itemA) {
  foreach ($arrB as $itemB) {
    if ($itemA === $itemB) {
      $arrC[] = $itemB;
      break;
    }
  }
}

var_dump($arrC);
