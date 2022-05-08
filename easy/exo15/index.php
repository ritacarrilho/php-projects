<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 15 : Associative Arrays"; // Page title
?>

<?php
// EXO15 : write a function that displays the information of each person (associative array)
$matthieu = [
    'name' => 'Matthieu',
    'age' => 30,
    'sexe' => true
];

$marie = [
    'name' => 'Marie',
    'age' => 32,
    'sexe' => false
] ;

function displayIndo(array $person): void {
    echo '<p>Name : ' . $person['name'] . '</p>';
    echo '<p>Age : ' . $person['age'] . '</p>';
    echo $person['sexe'] ? '<p>Sexe : Male </p>' : '<p>Sexe : Female</p>';
}

displayIndo($matthieu);
echo '<hr>';
displayIndo($marie);
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
