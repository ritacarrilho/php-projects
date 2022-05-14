<?php 
// MODEL
class AnimalDAO
{
    public static function getAnimals() 
    {
        $pdo = Database::getPDO();

        // request
        $req = "SELECT * FROM animal;";

        // prepare request to get data from database
        $query = $pdo->prepare($req);

        // execute request
        $query->execute();

        // fetch data as associative array
        $animals = $query->fetchAll( PDO::FETCH_ASSOC );

        return $animals;
    }

    public static function getType($animal_id) {
        $pdo = Database::getPDO();

        // request
        $req = "SELECT libelle FROM type INNER JOIN animal ON type.idType = animal.idType WHERE animal.idAnimal = :idAnimal;";

        // prepare request to get data from database
        $query = $pdo->prepare($req);
        // pass the variable to the request
        $query->bindValue(":idAnimal", $animal_id, PDO::PARAM_INT);
        // execute request
        $query->execute();

        // fetch data as associative array
        $animals = $query->fetch( PDO::FETCH_ASSOC );

        return $animals["libelle"];
    }

    public static function getImages($animal_id) {
        $pdo = Database::getPDO();

        // request
        $req = "SELECT image.libelle, image.url FROM image INNER JOIN image_animal ON image.idImage = image_animal.idImage WHERE image_animal.idAnimal = :idAnimal;";

        // prepare request to get data from database
        $query = $pdo->prepare($req);
        // pass the variable to the request
        $query->bindValue(":idAnimal", $animal_id, PDO::PARAM_INT);
        // execute request
        $query->execute();

        // fetch data as associative array
        $animals = $query->fetchAll( PDO::FETCH_ASSOC );

        return $animals;
    }
}