<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 3 : Associative Arrays"; // Page title
?>

<!-- 
    Step 1 : create each animal array and put them all into an animal array
    Step 2 : create a function to display each animal info
    Step 3 : create a function to get animal according to their type
    Step 4 : create buttons with href of each type
    Step 5 : check the type of each animal and each button and display the animals
 -->

<?php
$animal1 = [
    "name" => "Mina",
    "age" => 2,
    "type" => "dog"
];

$animal2 = [
    "name" => "Tya",
    "age" => 7,
    "type" => "cat"
];

$animal3 = [
    "name" => "Moli",
    "age" => 4,
    "type" => "cat"
];

$animal4 = [
    "name" => "Hocket",
    "age" => 6,
    "type" => "dog"
];

$animals = [$animal1, $animal2, $animal3, $animal4];

// echo '<pre>'; print_r($animals); echo '</pre>';

function displayAnimals ( array $arr ) { // display all animals
    echo '---------------------------------- <br>';

    foreach($arr as $animal) {
        foreach ($animal as $key => $value) {
            echo '<p>' . $key . ' : ' . $value . '</p>'; 
        }

        echo '---------------------------------- <br>';
    }
}

function displayByType( array $arr, string $type ) { // display animals according to their type
    echo '---------------------------------- <br>';

    foreach($arr as $animal) {
        if($animal['type'] === $type) {
            foreach ($animal as $key => $value) {
                echo '<p>' . $key . ' : ' . $value . '</p>'; 
            }
        
            echo '---------------------------------- <br>';
        }
    }
}
?>

<!-- Buttons -->
<div>
    <a href="?type=all" class="btn btn-primary">all</a>
    <a href="?type=dogs" class="btn btn-primary">dogs</a>
    <a href="?type=cats" class="btn btn-primary">cats</a>
</div>

<?php
if(isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] !== 'all') {// if $_GET is different of 'all'
    if ($_GET['type'] === 'dogs') {
        displayByType($animals, 'dog'); // display type dog
    } else if ($_GET['type'] === 'cats') {
        displayByType($animals, 'cat'); // display type cat
    } 
    
} else {
    displayAnimals($animals); // display all animals
}
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>