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

function isValid($string) {

  $strArr = str_split($string);
  $counter = 0;

  foreach ( $strArr as $item ) {
    if ($item === '(') {
      $counter++;
    }
    else {
      $counter--;
    }
  }

  if ($counter !== 0 || array_shift($strArr) === ')' ) {
    return 'invalid';
  } else {
    return 'valid';
  }
}

$str = '()()(';
echo isValid($str);

$string = "google";

function rotator($str)
{
  $index = strlen($str) - 1;
  $result = '';

  while ($index >= 0) {
    $currentChar = $str[$index];
    $result = "{$result}{$currentChar}";
    $index = $index - 1;
  }

  return $result;
}

echo rotator($string);

echo '<hr>';

function isPolindrome($string) {

  $revStr = rotator($string);

  if ($string === $revStr) {
    return "true";
  }
  else {
    return 'false';
  }

};

echo isPolindrome($string);

function isValids($bracket) {

  $strArr = str_split($bracket);
  $counter = 0;

  foreach ( $strArr as $item ) {

    if ($item === '(') {
      $counter++;
    }
    else {
      if ( --$counter < 0){
        break;
      }
    }
  }
  if ($counter == 0 ) {
    return 'valid';
  } else {
    return 'invalid';
  }
}

$str = '()())()()';
echo isValids($str);


