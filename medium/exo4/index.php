<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 4 : Objects and Classes"; // Page title
?>

<!-- 
    Step 1 : create a class Animal, instanciate each animal and put them into an array
    Step 2 : create a function to display each animal info
    Step 3 : create a function to get animal according to their type
    Step 4 : create buttons with href of each type
    Step 5 : check the type of each animal and each button and display the animals
 -->

<?php
class Animal {
    public string $name;
    public int $age;
    public string $type;

    public function __construct (string $name, int $age, string $type) {
        $this->name = $name;
        $this->age = $age;
        $this->type = $type;
    }
}

// Instanciate animal
$animal1 = new Animal ("Mina", 2, "dog");
$animal2 = new Animal ("Tya", 7, "cat");
$animal3 = new Animal ("Moli", 4, "cat");
$animal4 = new Animal ("Hocket", 6, "dog");

$animals = [$animal1, $animal2, $animal3, $animal4]; // put all animals objects into an array

// echo '<pre>'; print_r($animals); echo '</pre>';

function displayAnimals ( array $arr ) { // display all animals
    echo '---------------------------------- <br>';

    foreach($arr as $animal) {
        echo '<p>Name : ' . $animal->name . '</p>'; 
        echo '<p>Age : ' . $animal->age . '</p>'; 
        echo '<p>Type : ' . $animal->type . '</p>'; 
        echo '---------------------------------- <br>';
    }
}

function displayByType( array $arr, string $type ) { // display animals according to their type
    echo '---------------------------------- <br>';

    foreach($arr as $animal) {
        if($animal->type === $type) {
            echo '<p>Name : ' . $animal->name . '</p>'; 
            echo '<p>Age : ' . $animal->age . '</p>'; 
            echo '<p>Type : ' . $animal->type . '</p>'; 
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