<?php 
/**
 * Animals Catalogue/List:
 * Use Database to display all animals information
 * class Animal -> allows to create an animal (all private properties) => Controller
 * Class AnimalDAO -> allows to recover data from DB => Model
 * Class PDO -> allows to instanciate PDO to connect to DB => DB connection
 * file index.php -> allows to connect all files => View
 */

ob_start(); 
$titre = "Animals"; 
?>

<!-- CONTROLLER -->
<?php
require 'DatabasePDO.php';
require 'Animal.php';
require 'AnimalDAO.php';
// VIEW
/** Unitary Test
 * new Animal(1, "toto", 23, true, "chien", []);
 * new Animal(2, "tata", 34, true, "chat", []);
 * 
 * foreach(Animal::$animals as $animal) {
 *     echo '<pre>'; print_r($animal); echo '</pre>';
 * }
 */

// get animals from DB 
$animals = AnimalDAO::getAnimals();

foreach($animals as $animal) {
    $type = AnimalDAO::getType($animal['idAnimal']); // get the type os each animal
    $images = AnimalDAO::getImages($animal['idAnimal']); // get the type os each animal
    new Animal($animal['idAnimal'], $animal['nom'], (int)$animal['age'], (int)$animal['sexe'], $type, $images);
}

// echo '<pre>'; print_r($animals); echo '</pre>';
?>

<!-- VIEW -->
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Sexe</th>
            <th scope="col">Type</th>
            <th scope="col">Images</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach(Animal::$animals as $animal){ ?>
           <tr>
                <td style="vertical-align:middle"><?= $animal->getId() ?></td>
                <td style="vertical-align:middle"><?= $animal->getName() ?></td>
                <td style="vertical-align:middle"><?= $animal->getAge() ?></td>
                <td style="vertical-align:middle"><?= ($animal->getSexe() ===0) ? "Femelle" : "Mâle"; ?></td>
                <td style="vertical-align:middle"><?= $animal->getType() ?></td>
                <td style="width:200px" class="text-center">
                    <?php foreach ($animal->getImages() as $image) : ?>
                        <img src="sources/<?= $image['url'] ?>" alt="<?= $image['libelle'] ?>" style="max-height:150px;" class="img-thumbnail img-fluid"/>
                    <?php endforeach; ?>
                </td>
           </tr>
    <?php }?>
    </tbody>
</table>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>