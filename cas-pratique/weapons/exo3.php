<?php ob_start(); 
$titre = "Exo 3 : Associative arrays "; 
?>

<?php
// EXO2 : each weapons is an associative array 
$weapon1 = [
    'name' => 'sword',
    'image' => 'sources/epee/epee1.png',
    'description' => 'A cuting weapon'
];

$weapon2 = [
    'name' => 'arch',
    'image' => 'sources/arc/arc1.png',
    'description' => 'A distante weapon'
];

$weapon3 = [
    'name' => 'axe',
    'image' => 'sources/hache/hache1.png',
    'description' => 'A cuting weapon or an tool that allows to cut wood'
];

$weapon4 = [
    'name' => 'chain',
    'image' => 'sources/fleau/fleau1.png',
    'description' => 'A cuting weapon or an tool that allows to cut wood'
];

$weapons = [$weapon1, $weapon2, $weapon3, $weapon4];
// echo '<pre>'; print_r($weapons); echo '</pre>';
?>

<div>
    <strong>Here is the list of all weapons : </strong>
</div>

<?php
foreach($weapons as $weapon): ?>
<div class="row">
    <div class="col-3">
        <img src=" <?php echo $weapon['image'] ?>">
    </div>
    <div class="col-auto">
        <h2> <?php echo $weapon['name'] ?></h2>
        <p> <?php echo $weapon['description'] ?> </p>
    </div>  
</div>

<?php endforeach; ?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>