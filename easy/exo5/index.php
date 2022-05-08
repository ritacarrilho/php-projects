<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 5 : loop for"; // Page title
?>

<?php
// EXO5 : choose a random number. Display the multiplication table

$num = rand(1, 10);

echo '<h2>Here is the multiplication table of the number ' . $num . ': </h2>';

for ($i=1; $i < 11 ; $i++) { 
    $mult = $num * $i;
    echo '<p>' . $num . ' x ' . $i . ' = ' . $mult . '</p>'; 
}

?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
