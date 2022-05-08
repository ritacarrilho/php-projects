<?php 
function displayTable(array $arr) {
    if(isset($arr) && !empty($arr)) {
        echo '<p>' . implode(' - ', $arr) . '</p>';
        echo '<p> The average grade is : ' . getAverage($arr) . '</p>';
        if(isPair($arr)) {
            echo '<p> The array has only pair values. </p>';
        } else {
            echo '<p> The array does not have only pair values. </p>';
        }
    }
}

function getAverage(array $arr) : int {
    $grades = 0;
    foreach ($arr as $value) { 
        $grades += $value; 
    }

    return  $grades / count($arr);
}

function isPair(array $arr) : bool {
    foreach($arr as $el) {
        if ($el % 2 !== 0) { return false; }
    }
    return true;
}

/**
 * Correction
 function displayTable(array $arr) {
    if(isset($arr) && !empty($arr)) {
        foreach($arr as $key => $val) {
            echo ($key === 0) ? "" :  " - "; 
            echo $val;
        }
    }
}

function getAverage(array $tab) : int {
    $result = 0;
    foreach($tab as $value) {
        $result += $value; 
    }
    return $result/count($tab);
}

function isPair(array $table) : bool {
    foreach($table as $el) {
        if ($el % 2 !== 0) return false;
    }
    return true;
}

 */