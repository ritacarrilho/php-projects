<?php 
class Animal
{
    private int $id;
    private string $name;
    private int $age;
    private string $sexe;
    private string $type;
    private array $img = [];

    public static $animals = []; // saves all animals in an array at the moment of their creation

    public function __construct($id, $name, $age, $sexe, $type, $img)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->sexe = $sexe;
        $this->type = $type;
        $this->img = $img;
        self::$animals[] = $this; // insert he new animal inside the array
    }

    public function getId() { return $this->id; }
    public function getName() { return $this->name; }
    public function getAge() { return $this->age; }
    public function getSexe() { return $this->sexe; }
    public function getType() { return $this->type; }
    public function getImages() { return $this->img; }
    
    public function setId($id) { $this->id = $id; }
    public function setName($name) { $this->name = $name; }
    public function setAge($age) { $this->age = $age; }
    public function setSexe($sexe) { $this->sexe = $sexe; }
    public function setType($type) { $this->name = $type; }
    public function setImages($img) { $this->img = $img; }

    public function __toString()
    {
        
    }
}