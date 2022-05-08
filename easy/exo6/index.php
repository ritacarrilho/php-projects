<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 6 : Loop for"; // Page title
?>

<?php
// EXO5 : choose a random number between 5 and 15. 

$random = rand(5, 15);
echo '<h2> Here are the cumulation of the ' . $random . ' numbers (backwards) : </h2>';

$result = 0;

for ($i = $random; $i >= 1; $i--) { 
    $result += $i; 
    echo '<p>Stage : ' . ($random-$i+1) . ' - result = ' . $result . '</p>';
}
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
