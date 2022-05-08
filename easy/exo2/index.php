<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 2 : Variables an ternary"; // Page title
?>

<?php
// EXO2 : Display as "Marie is 30 years old and is a female"
$name = "Marie";
$age = 30;
$male = false;

$name2 = "Pierre";
$age2 = 32;
$male2 = true;

echo '<p>';
echo $name . ' is ' . $age . ' years old and is a ';  
echo($male2 ? "male" : "female");
echo '.';
echo '</p>';
 

echo '<p>';
echo $name2 . ' is ' . $age2 . ' years old and is a ';  
echo($male2 ? "male" : "female");
echo '.';
echo '</p>';
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";

?>
