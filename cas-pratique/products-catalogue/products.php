<?php 
ob_start(); 
$titre = "Dynamique Products Catalogue"; 
?>

<?php
/**
 * Products Catalogue:
 * Create Database with 2 tables -> products and products_type
 * Display all products
 */
?>

<!-- CONTROLLER -->
<?php
session_start();

$pdo_options = [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ];

// verify if is connected to DB
try {
    // instanciate PDO, connect to database
    $db = new PDO("mysql:dbname=lamp;host=database;charset=utf8mb4", "lamp", "lamp", $pdo_options );    
} catch (PDOException $e) {
    echo 'Connection to DB lost : ' . $e->getMessage();
}

// MODEL
// request
$req = "SELECT cours.*, type.libelle as type_name 
FROM cours JOIN type ON cours.idType = type.idType;";

// prepare request to get data from database
$query = $db->prepare($req);

// execute request
$query->execute();

// fetch data as associative array
$products = $query->fetchAll( PDO::FETCH_ASSOC );
// echo '<pre>'; print_r($products); echo '</pre>';
?>

<!-- VIEW -->
<div class="row no-gutters">
<?php // print the data 
if(isset($products) && !empty($products)) :
    foreach($products as $product) :?>
    <div class="col-4">
        <div class="card m-2">
            <img src=" <?= '/cas-pratique/products-catalogue/source/' . $product['image']; ?>" alt="" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"><?= $product['libelle'] ?></h5>
                <p class="card-text"><?= $product['description'] ?></p>
                <span class="badge badge-primary"><?= $product['type_name'] ?></span>
            </div>
        </div>
    </div>
<?php 
endforeach; 
endif;?>
</div>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>