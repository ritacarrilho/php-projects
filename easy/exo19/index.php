<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 19 : Méthod Post"; // Page title
?>

<!-- Exo18: get info of formulary -->
<form action="#" method="post">
    <div class="form-group">
        <label for="number">Number : </label>
        <input type="number" name="number" class="form-control">
    </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>

<?php
// var_dump($_POST);

function isPair(int $nbr): void {
    if ($nbr % 2 === 0 ) {
        echo '<div class="container"><p> The chosen number is pair.</p></div>';
    } else {
        echo '<div class="container"><p> The chosen number is not pair.</p></div>';
    }
}
// Verify if fields are correctly filled
if(isset($_POST['number']) && !empty($_POST['number'])) {
    isPair($_POST['number']);
}
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
