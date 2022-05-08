<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 11 : Arrays"; // Page title
?>

<?php
// EXO11 : create 2 arrays, one with male names and another with female names. DIsplay the two arrays
$male_names = ["Matthieu", "Pierre", "Marc", "Jean"];
$female_names = ["Morgane", "Mathilde", "Julie"];

for ($i=0; $i < count($male_names); $i++) { 
    echo '<p>' . $i . ' : ' . $male_names[$i] . '</p>';
}

echo '<hr>';

// for ($i=0; $i < count($female_names); $i++) { 
//     echo '<p>' . $i . ' : ' . $female_names[$i] . '</p>';
// }

foreach($female_names as $i => $female) {
    echo '<p>' . $i . ' : ' . $female . '</p>';
}


?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
