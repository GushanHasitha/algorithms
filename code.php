<?php
// finding the small number of the array

function a() 
{
    $list = array(1, 2, 3, 4, 0);
    $min = $list[0];
    for($i = 0; $i < sizeof($list); $i++) {
        if($list[$i] < $min) {
            $min = $list[$i];
        }
    }
    echo $min;
}
a();


//finding the second smallest number in the array
function a() 
{
    $list = array(12, 2, 3, 0, 4);
    $min = $list[0];
    $min2 = $list[1];
    for($i = 0; $i < sizeof($list); $i++) {
        if($list[$i] < $min) {
            $min2 = $min;
            $min = $list[$i];
        }elseif($list[$i] < $min2 && $list[$i] != $min) {
            $min2 = $list[$i];
        }
    }
    return $min2;
}
echo a();

?>