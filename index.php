<?php ob_start(); ?>

<h2>Here are 30 PHP exercises</h2>

<?php
    $titre = "PHP exercises";
    $content = ob_get_clean();
    require "global/common/template.php";
?>
