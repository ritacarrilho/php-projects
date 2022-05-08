<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 16 : Associative Arrays"; // Page title
?>

<?php
// EXO16 : invert the value of the variables 
$persons = [
    $matthieu = [
        'name' => 'Matthieu',
        'age' => 30,
        'sexe' => true
    ],

    $marie = [
        'name' => 'Marie',
        'age' => 32,
        'sexe' => false
    ], 

    $marc = [
        'name' => 'Marc',
        'age' => 25,
        'sexe' => true
    ],

    $mathilde = [
        'name' => 'Mathilde',
        'age' => 21,
        'sexe' => false
    ] 
];

function displayInfo( $arr ) {
    foreach($arr as $person) {
        echo '<p>Name : ' . $person['name'] . '</p>';
        echo '<p>Age : ' . $person['age'] . '</p>';
        echo $person['sexe'] ? '<p>Sexe : Male </p>' : '<p>Sexe : Female</p>';
        echo '<hr>';
    }
}

displayInfo($persons);
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
