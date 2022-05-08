<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 7 : Interaction between 2 classes"; // Page title
require "Player.php";
require "Weapon.php";
?>

<!-- 
    1 : create a class Player, properties(private): name, strength, PV, one weapon (only the weapon id)
    2 : create a class Weapon, properties(private): id automatically generated and incremented, name, damage number
    3 : the classes must be in two different files
    4 : the file index willdisplay all informations 

    - create auto increment static property to change the Weapon id inside the class
    - create a static array inside the class Weapons to store all the Weapon objects
    - create a static method to  recover a weapon according to it's ID
-->

<?php
$weapon1 = new Weapon('Axe', 10);
$weapon2 = new Weapon('Sword', 8);

$player1 = new Player();
$player1->setName('Milo');
$player1->setIdWeapon($weapon1->getId());

echo $player1;

echo '<p>-----------------<p>';

$player2 = new Player();
$player2->setName('Tya');
$player2->setIdWeapon($weapon2->getId());

echo $player2;

// echo '<pre>'; print_r($weapon1); echo '</pre>';
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>