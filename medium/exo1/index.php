<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 1 : Bi-dimentional Array"; // Page title
?>

<?php
// EXO1 : display the multiplication tables from 1 to 10 
// $row = [];

// for ($i=1; $i <= 10 ; $i++) { 
//     $column = [];
//     for ($j=1; $j <= 10 ; $j++) { 
//         $column [] =  $j * $i; 
//     }
//     $row[] = $column;
// }
// echo '<pre>';
// print_r($row);
?>

<table class="table">
    <?php for($i=1; $i <= 10; $i++) :?>
        <tr <?= ($i === 1) ? 'class="font-weight-bold"' : '' ?>>
            <?php for ($j=1; $j <= 10 ; $j++) :?>
                <td <?= ($j === 1) ? 'class="font-weight-bold"' : '' ?>>
                    <?php echo $i * $j ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
