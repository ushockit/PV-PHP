<?php

// Анонимная функция
/*$func = function($text) {
  echo "<h1>$text</h1>";
};
$func('Hello world');*/

// Стрелочные функции

$arr = [1, 2, 3, 4, 5];


//$result = array_filter($arr, function ($val) {
//   return $val % 2 == 0;
//});
//var_dump($result);


$min = 3;
// Использование замыкания
$result = array_filter($arr, function ($n) use($min) {
   return $n >= $min;
});
var_dump($result);


$arr = [1, 5, 9, -5, 2, 0, 11, -23, -100];

$countPositiveNums = 0;

// Замыкание значения по ссылке
array_walk($arr, function($n) use(&$countPositiveNums) {
   if ($n > 0) {
       $countPositiveNums++;
   }
});

echo "Count positive nums = $countPositiveNums";


function removeAllNegativeNums($arr) {
    $newArr = [];

    array_walk($arr, function ($n) use (&$newArr) {
       if ($n >= 0) {
           // array_push($newArr, $n);
           $newArr[] = $n;
       }
    });
    return $newArr;
}

var_dump(removeAllNegativeNums($arr));

$result = array_reduce($arr, function ($acc, $n) {
    $acc += $n;
    return $acc;
});

echo $result;

$demoArr = [ 'var' => 100 ];

unset($demoArr['var']);

if (isset($demoArr['var'])) {
    echo 'Exists';
}

$arrSize = count($arr);



