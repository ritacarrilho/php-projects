<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 3 : Tests"; // Page title
?>

<?php
// Choose a random number between 1 and 20. According to that number display: "The number is between 1 and 5", "The number is between 6 and 10", "The number is between 11 and 15", "The number is between 16 and 20"
$num = rand(1, 20);

echo "<h2> The number is : $num </h2>";

// Verify the value
if ($num <= 5) {
    echo 'The number is between 1 and 5.';
} elseif ($num <= 10) {
    echo 'The number is between 6 and 10.';
} elseif ($num <= 15) {
    echo 'The number is between 11 and 15.';
} else {
    echo 'The number is between 16 and 20.';
}
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
