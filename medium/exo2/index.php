<?php
ob_start(); // buffer, register all that will be displayed
require "functions.php";

$titre = "Exo 2 : Functions and Arrays"; // Page title
?>

<?php
$tab = [2, 6, 10, 20, 9, 14];
$tab2 = [4, 8, 2, 26, 18, 14]; 
?>

<div class="row text-center">
    <div class="col">
        <h2> Table 1 : </h2>
        <?php displayTable($tab); ?>
    </div>
    <div class="col">
        <h2> Table 2 : </h2>
        <?php displayTable($tab2); ?>
    </div>
</div>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
