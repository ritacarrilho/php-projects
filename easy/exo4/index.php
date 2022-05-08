<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 4 : Tests"; // Page title
?>

<?php
// EXO4 : Choose 2 random numbers. Calculate the absolute value. Display as "The absolute value of 50 - 34 isn't between 25 and 75".
$num1 = rand(1, 100);
$num2 = rand(1, 100);

// var_dump(abs($num1 - $num2)); 
echo '<p>Number 1: <strong>' . $num1 . '</strong></p>';
echo '<p>Number 2: <strong>' . $num2 . '</strong></p>';

$random_result = abs($num1 - $num2);

echo '<p>Absolute value : ' . $random_result . '</p>'; 

if ( $random_result > 25 && $random_result < 75 ) {
    echo '<p>The absolute value of <strong>'. $num1 . ' - ' . $num2 . '</strong> is between 25 and 75.'; 
} else {
    echo 'The absolute value of <strong>'. $num1 . ' - ' . $num2 . '</strong> isn\'t between 25 and 75.'; 
}

?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
