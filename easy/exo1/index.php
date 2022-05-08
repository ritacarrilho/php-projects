<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 1 : Variables"; // Page title
?>

<?php
// EXO1 : invert the value of the variables 
    $a=3;
    $b=5;
    $c=7;
 
    echo '<p>';
    echo 'Initial values : <br>' ;
    echo 'A : ' . $a . '<br>';
    echo 'B : ' . $b . '<br>';
    echo 'C : ' . $c . '<br>';
    echo '</p>';

    $temp = $a;
    $a = $b;
    $b = $c;
    $c = $temp;

    echo '<p>';
    echo 'Ordered values : <br>' ;
    echo 'A : ' . $a . '<br>';
    echo 'B : ' . $b . '<br>';
    echo 'C : ' . $c . '<br>';
    echo '</p>';
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
