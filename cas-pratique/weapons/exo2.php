<?php ob_start(); 
$titre = "Exo 2 : Arrays and loops"; 
?>

<?php
// EXO2 : put weapons inside an array and loop them throught a for and a foreach loop
$weapon1 = 'sword';
$weapon2 = 'arch';
$weapon3 = 'axe';
$weapon4 = 'chain';

$weapons = [$weapon1, $weapon2, $weapon3, $weapon4];
// echo '<pre>'; print_r($weapons); echo '</pre>';
?>

<div>
    <strong>Here is the list of all weapons using a for loop : </strong>
</div>
<p>
    Weapon 1 : <?=  $weapons[0] ?><br>
    Weapon 2 : <?= $weapons[1] ?><br>
    Weapon 3 : <?= $weapons[2] ?><br>
    Weapon 4 : <?= $weapons[3] ?><br>
</p> 

<hr>

<div>
    <strong>Here is the list of all weapons using a for loop : </strong>
</div>
<?php
for ($i=0; $i < count($weapons) ; $i++) { 
    echo 'Weapon ' . ($i + 1) . ' : ' . $weapons[$i] . '<br>';
}
 ?>

<hr>

<div>
    <strong>Here is the list of all weapons using a foreach loop : </strong>
</div>
<?php
foreach($weapons as $i => $weapon): 
    echo 'Weapon ' . ($i+1) . ' : ' . $weapon . '<br>'; 
endforeach; ?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>