<?php ob_start(); 
$titre = "Exo 1 : Variables"; 
?>

<?php
// EXO1 : create the menu variables
$weapon1 = 'sword';
$weapon2 = 'arch';
$weapon3 = 'axe';
$weapon4 = 'chain';

$weapons = [$weapon1, $weapon2, $weapon3, $weapon4];
// echo '<pre>'; print_r($weapons); echo '</pre>';
?>

<div>
    <strong>Here is the list of all weapons : </strong>
</div>
<?php
foreach($weapons as $i => $value): echo '<p>Weapon ' . ($i+1) . ' : ' . $value . '</p>'; endforeach; ?>
<!-- <p>
    Weapon 1 : <?php //echo $weapon1 ?><br>
    Weapon 2 : <?php //echo  $weapon2 ?><br>
    Weapon 3 : <?php //echo  $weapon3 ?><br>
    Weapon 4 : <?php //echo  $weapon4 ?><br>
</p> -->

<select name="cars" id="cars">
    <option value=""> </option>
    <?php foreach ($weapons as $weapon) : echo '<option value="' . $weapon . '">' . $weapon . '</option>'; endforeach; ?>
</select>

<!-- <select>
    <option><?= $weapon1 ?></option>
    <option><?= $weapon2 ?></option>
    <option><?= $weapon3 ?></option>
    <option><?= $weapon4 ?></option>
</select> -->

<?php
    $content = ob_get_clean();
    require "../../../global/common/template.php";
?>
