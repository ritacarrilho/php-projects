<?php ob_start(); 
$titre = "Exo 6 : OOP "; 
?>

<?php
// EXO6 : class weapon
class Weapon{
    private string $name;
    private int $level;
    private string $description;

    public function __construct($name, $description)
    {
        $this->name= $name;
        $this->level= 1;
        $this->description= $description;
    }

    public function getName(): string { return $this->name; }
    public function getLevel(): string { return $this->level; }
    public function getDescription(): string { return $this->description; }

    public function setLevel($level) {$this->level = $level;}
    public function setName($name) {$this->name = $name;}
    public function setDescription($description) {$this->description = $description;}
        

    public function __toString() : string
    {
        $weapon = '<div class="row">';
        $weapon .= '<div class="col-3">';
        $weapon .= '<img src=" '. $this->getImagePath() .'"></div>';
        $weapon .= '<div class="col-auto">';
        $weapon .= '<h2>' . $this->name . '</h2>';
        $weapon .= '<p>'. $this->description . '</p></div></div>';

        return $weapon;
    }

    public function getImagePath() {
        $search = ['à', 'é', 'à', 'ç', 'è']; // variable with special characters 
        $replace = ['a', 'e', 'a', 'c', 'e'];

        (($this->name !== 'arc') ? $this->level = rand(1,5) : $this->level = rand(1,2)); // display images randomly
        $name_without_accents = str_replace($search, $replace, $this->name);

        return 'sources/' . $name_without_accents . '/' . $name_without_accents . $this->level . '.png';
    } 
} 

$weapon1 = new Weapon('épée','A cuting weapon');
$weapon2 =  new Weapon('arc', 'A distante weapon');
$weapon3 =  new Weapon('hache', 'A cuting weapon or an tool that allows to cut wood');
$weapon4 =  new Weapon('fleau', 'A cuting weapon or an tool that allows to cut wood');

$weapons = [$weapon1, $weapon2, $weapon3, $weapon4];
// echo '<pre>'; print_r($weapons); echo '</pre>';
?>

<div>
    <strong>Here is the list of all weapons : </strong>
</div>

<?php
// display weapons
foreach($weapons as $weapon): 
echo $weapon;
endforeach;  
?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>