<?php

$list = array(3, 8, 1, 9, 5, 12, 15);
$length = sizeof($list);

//selection sort algorithm
function selectionSort($list, $length) {
    for($i = 0; $i < $length; $i++) {
        for($j = $i + 1; $j < $length; $j++) {
            if($list[$j] < $list[$i]) {
                $min = $list[$j];
                $list[$j] = $list[$i];
                $list[$i] = $min;
            }
        }
        echo $list[$i] . "\n";
    }
}

selectionSort($list, $length);


//bubble sort algorithm
function bubbleSort($list, $length) {
    for($k = 0; $k < $length - 1; $k++) {
        $flag = 0;
        //this loop does not want to run always n-1 times, because in every time array is divided to two parts.
        //left side is unsorted and right side is sorted. we can modify $length - 1 to $length - $k - 1
        for($i = 0; $i < $length - $k - 1; $i++) {
            if($list[$i] > $list[$i + 1]) {
                $tmp = $list[$i + 1];
                $list[$i + 1] = $list[$i];
                $list[$i] = $tmp;
                $flag = 1;
            }
        }
        
        if($flag == 0) {
            break;
        }
        
    }
    return $list;
}

$result = bubbleSort($list, $length);
for($i = 0; $i < $length; $i++) {
    echo $result[$i] . "\n";
}

//insertion sort algorithm
function insertionSort($list, $length) {
    for($i = 1; $i < $length; $i++) {
        $next = $list[$i];
        for($j = $i - 1; $j >= 0; $j--) {
            if($list[$j] > $next) {
                $list[$j + 1] = $list[$j];
            }else {
                break;
            }
        }
        $list[$j + 1] = $next;
    }
    return $list;
}

$result = insertionSort($list, $length);
for($i = 0; $i < $length; $i++) {
    echo $result[$i] . "\n";
}

?>