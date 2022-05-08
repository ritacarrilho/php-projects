<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 18 : Méthod Get"; // Page title
?>

<!-- Exo18: get info of formulary -->
<form action="#" method="get">
    <div class="form-group">
        <label for="pseudo">Pseudo : </label>
        <input type="text" name="pseudo" class="form-control">
    </div>
    <div class="form-group">
        <label for="age">Age : </label>
        <input type="number" name="age" class="form-control">
    </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>

<?php
// var_dump($_GET);

// Verify if fields are correctly filled
if(
    isset($_GET['pseudo']) && !empty($_GET['pseudo']) && 
    isset($_GET['age']) && !empty($_GET['age'])
) {
    echo '<div class="container"><p>' . $_GET['pseudo'] . ' is ' . $_GET['age'] . ' years old.</p></div>';
}
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
