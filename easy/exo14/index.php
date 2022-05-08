<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 14 : Variables"; // Page title
?>

<?php
// EXO14 : use the arrays of the exercice 13 and join them into one array
// $marc = [12, 15, 13, 7, 18];
// $mathieu = [11, 14, 10, 4, 20, 8, 2];
// $pierre = [5, 13, 9, 3];
// $paul = [6, 11, 15, 2];

//Method 1
/*
function getAverageGrade( array $arr ): int {
    $sum = array_sum($arr);
    $medium = $sum/count($arr);

    return $medium;
}


//Method 2
function getAverageGrade( array $notes): int {
    $result = 0;
    foreach($notes as $note) {
        $result += $note;
    }
    return $result / count($notes);
}

echo '<p>The average grade of <strong> Marc </strong> is <strong>' .  getAverageGrade($marc) . '</strong></p>';
echo '<p>The average grade of <strong> Mathieu </strong> is <strong>' .  getAverageGrade($mathieu) . '</strong></p>'; 
echo '<p>The average grade of <strong> Mathieu </strong> is <strong>' .  getAverageGrade($pierre) . '</strong></p>'; 
echo '<p>The average grade of <strong> Mathieu </strong> is <strong>' .  getAverageGrade($paul) . '</strong></p>'; 
*/

$grades = [
    'Marc' => [12, 15, 13, 7, 18],
    'Mathieu' => [11, 14, 10, 4, 20, 8, 2],
    'Pierre' => [5, 13, 9, 3],
    'Paul' => [6, 11, 15, 2]
];

function getAverageGrade( array $grades): void {
    $result = 0;
    foreach($grades as $student => $grade) {
        $result += $grade;
    }

    $average = $result / count($grades);
    echo '<p>The average grade of <strong>' . $student . '</strong> is <strong>' .  $average . '</strong></p>';
}

foreach($grades as $grade) { GetAverageGrade($grade); }

?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
