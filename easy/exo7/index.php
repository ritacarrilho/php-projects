<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 7 : Switch"; // Page title
?>

<?php
// EXO7 : Choose a random number between 1 and 12 and display the month of that random number
$random = rand(1, 12);
$month = '';

switch ($random) {
    case 1: $month = 'January';
        break;
    case 2: $month = 'February';
    break;
    case 3: $month = 'March';
        break;
    case 4: $month = 'April';
        break;    
    case 5: $month = 'May';
        break;
    case 6: $month = 'June';
        break;
    case 7: $month = 'July';
        break;
    case 8: $month = 'August';
        break;
    case 9: $month = 'September';
        break;
    case 10: $month = 'October';
        break;
    case 1: $month = 'November';
        break;
    case 12: $month = 'December';
        break;
}

echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $month . '</strong> in letter.'

// $arr_month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ];

// switch ($random) {
//     case 1:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[0] . '</strong> in letter.';
//         break;
//     case 2:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[1] . '</strong> in letter.';
//         break;
//     case 3:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[2] . '</strong> in letter.';
//         break;    
//     case 4:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[3] . '</strong> in letter.';
//         break; 
//     case 5:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[4] . '</strong> in letter.';
//         break;
//     case 6:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[5] . '</strong> in letter.';
//         break;
//     case 7:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[6] . '</strong> in letter.';
//         break;
//     case 8:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[7] . '</strong> in letter.';
//         break;
//     case 9:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[8] . '</strong> in letter.';
//         break;
//     case 10:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[9] . '</strong> in letter.';
//         break;
//     case 11:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[10] . '</strong> in letter.';
//         break;
//     case 12:
//         echo 'The month <strong>' . $random . '</strong> in number corresponds to the month of <strong>' . $arr_month[11] . '</strong> in letter.';
//         break;
//     default:
//         # code...
//         break;
// }
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
