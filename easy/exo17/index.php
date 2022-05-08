<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 17 : Complex Arrays"; // Page title
?>

<?php
// EXO17 : 
$persons = [
    $matthieu = [
        'name' => 'Matthieu',
        'age' => 30,
        'sexe' => true,
        'grades' => [12, 15, 13, 7, 18]
    ],

    $marie = [
        'name' => 'Marie',
        'age' => 32,
        'sexe' => false,
        'grades' => [11, 14, 10, 4, 20, 8, 2]

    ], 

    $marc = [
        'name' => 'Marc',
        'age' => 25,
        'sexe' => true,
        'grades' => [5, 13, 9, 3]

    ],

    $mathilde = [
        'name' => 'Mathilde',
        'age' => 21,
        'sexe' => false,
        'grades' => [6, 11, 15, 2]

    ] 
];

// print_r($persons);

function displayInfo( $arr ) {

    foreach($arr as $person) {
        echo '<p>Name : ' . $person['name'] . '</p>';
        echo '<p>Age : ' . $person['age'] . '</p>';
        echo $person['sexe'] ? '<p>Sexe : Male </p>' : '<p>Sexe : Female</p>';
        getGrades ($person);
        getAverageGrade($person);
        echo '<hr>';
    }
}

function getGrades ($person) {    
    foreach($person['grades'] as $key => $value) {
        echo '<p>Grade ' . ($key + 1) .' : ' . $value . '</p>';
    }

    

}

function getAverageGrade( array $person): void {
    $result = 0;
    foreach($person['grades'] as $key => $value) {
        $result += $value;
    }
    $average = $result / count($person);
    echo '<p>Average : ' . $average . '</p>';
}

displayInfo($persons);
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
