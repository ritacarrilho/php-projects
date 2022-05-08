<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 8 : While"; // Page title
?>

<?php
// EXO8 : choose a number between 1 and 20. Restart the number whule the number is inferior to 15
$random = rand(1, 20);

$counter = 1;

while($random < 15) {
    echo 'Try '. $counter . ' : <strong>' . $random. '</strong> is too small (<15)</p>';
    $counter ++;

    $random = rand(1, 20);
}

echo '<p>The random number is : <strong>' . $random . '</strong></p>';

?>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
