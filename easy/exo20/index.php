<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 20 : Formulary and Methods"; // Page title
?>

<!-- Exo18: get info of formulary -->
<form action="" method="post">
    <div class="form-group">
        <label for="grade1">Grade 1 : </label>
        <input type="number" name="grade1" class="form-control">
    </div>
    <div class="form-group">
        <label for="grade2">Grade 2 : </label>
        <input type="number" name="grade2" class="form-control">
    </div>
    <div class="form-group">
        <label for="grade3">Grade 3 : </label>
        <input type="number" name="grade3" class="form-control">
    </div>
        <input type="submit" class="btn btn-primary" value="Submit">
    </div>
</form>

<?php
// var_dump($grades);

function getGradesAverage(array $arr): int {
    $result = 0;
    foreach($arr as $note) {
        $result += $note;
    }
    return $result / count($arr);
}

if(
    isset($_POST['grade1']) && !empty($_POST['grade1']) &&
    isset($_POST['grade2']) && !empty($_POST['grade2']) &&
    isset($_POST['grade3']) && !empty($_POST['grade3']) 
) {
    $grades = $_POST;
    $average = getGradesAverage($grades);
    echo '<div class="container"><p>The average of the ' . count($grades) . ' grades is : ' . $average . '</p></div>';
}
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
