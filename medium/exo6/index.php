<?php ob_start(); // buffer, register all that will be displayed
$titre = "Exo 5 : Private and Getters"; // Page title
require "House.php";
?>

<!-- 
    1 : create a class House, properties(private): id automatically generated, creation date, number of bedrooms, size
    2 : the attribute id must be static and contain the number of the last house created
 -->


<?php
$house1 = new House(2018, 3, 98 );
$house2 = new House(2019, 4, 120 );
$house3 = new House(2017, 4, 130 );

$houses = [$house1, $house2, $house3];

// echo '<pre>'; print_r($houses); echo '</pre>';
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col1">#</th>
            <th scope="col1">Date</th>
            <th scope="col1">Rooms</th>
            <th scope="col1">Size</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach($houses as $house) : ?>
            <tr>
                <td><?php echo $house->getId(); ?></td>
                <td><?php echo $house->getDate(); ?></td>
                <td><?php echo $house->getRooms(); ?></td>
                <td><?php echo $house->getSize(); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>