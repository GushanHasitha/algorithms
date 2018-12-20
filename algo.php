<?php

//return factorial 
function factorial($n) {
    if($n == 0) {
        return 1;
    }elseif($n == 1) {
        return 1;
    }else {
        return $n * ($n - 1);
    }
}

echo factorial(3);

//return fibonacci number
function fib($n) {
    if($n <= 0) {
        return 0;
    }elseif($n == 1) {
        return 1;
    }else {
        return fib($n - 1) + fib($n - 2);
    }
}

echo fib(30);

//tower of hanoi
function towerOfHanoi($n, $from_rod, $to_rod, $aux_rod) {
    if($n == 1) {
        echo "move disk from" . $from_rod . "to" . $to_rod ."<br>";
    }else {
        towerOfHanoi($n - 1, $from_rod, $aux_rod, $to_rod); 
        echo "move disk from" . $from_rod . "to" . $to_rod ."<br>";
        towerOfHanoi($n - 1, $aux_rod, $to_rod, $from_rod);
    }
}

towerOfHanoi(2, 'A', 'C', 'B');


//reverse a string
function reverse() {
    $str = "gushan";
    $rev = array();
    $array = str_split($str);
    $length = sizeof($array);
    for($i = $length - 1; $i >= 0; $i--) {
        array_push($rev, $array[$i]);
    }
    return $rev;
}

$out = reverse();
for($i = 0; $i < sizeof($out); $i++) {
    echo $out[$i] . "\n";
}

//reverse an array
function reverseArray() {
    $arr = ['g','u','s','h','a','n'];
    for($i = count($arr) - 1; $i >= 0; $i--){
        $arr[] = $arr[$i];
        unset($arr[$i]);
    }
    //using array_values() to reindex array from 0
    return array_values($arr);
}
$out = reverseArray();
for($i = 0; $i < count($out); $i++) {
    echo $out[$i] . "\n";
}

?>