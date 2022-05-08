<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 9 : Functions"; // Page title
?>

<?php
// EXO9 : Write a function that verifies if a number is pair and display a message 

// variables to verify if the function works
$a=5;
$b=122;

function isPair( int $number ): void {
    if($number % 2 === 0) {
        echo '<p>The number ' . $number . ' is pair.</p>';
    }
    else {
        echo '<p>The number ' . $number . ' is not pair.</p>';
    }
}

isPair($a);
isPair($b);
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
