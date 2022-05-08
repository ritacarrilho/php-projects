<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 10 : Functions"; // Page title
?>

<?php
// EXO10 : write a function that deletes all the vowels of a string et returns it
$test_string = 'Coucou';

// Method 1
function deleteVowels( string $str): void {
    $new_string = str_ireplace(array('a','e','i','o','u',' '), '', $str);

    echo '<p>' . $str . ' without vowels is ' . $new_string . '</p>';
}

deleteVowels($test_string);


 // Method 2
 /*
function deleteVowels( string $str): string {
    $new_string = str_ireplace(array('a','e','i','o','u',' '), '', $str);

    return $new_string;
}

function displayNewString(string $str): void {
    echo '<p>' . $str . ' without vowels is ' . deleteVowels($str) . '</p>';
}

displayNewString($test_string);
  */

// Method 3
/*
$str_without_vowels = deleteVowels($test_string);

function deleteVowels($str): string {
    $arr_vowels = ['a','e','i','o','u'];
    $result = str_replace($arr_vowels, "", $str);
    return $result;
}

echo '<p>' . $test_string . ' without vowels is ' . $str_without_vowels  . '</p>';
 */
?>

<?php
    $content = ob_get_clean();
    require "../global/common/template.php";
?>
