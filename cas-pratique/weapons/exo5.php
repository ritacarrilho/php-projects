<?php ob_start(); 
$titre = "Exo 5 : OOP "; 
?>

<?php
// EXO4 : class weapon
class Weapon{
    private string $name;
    private string $image_path;
    private string $description;

    public function __construct($name, $image_path, $description)
    {
        $this->name= $name;
        $this->image_path= $image_path;
        $this->description= $description;
    }

    public function getName(): string { return $this->name; }
    public function getImage(): string { return $this->image_path; }
    public function getDescription(): string { return $this->description; }

    public function setImage($image) {$this->image_path = $image;}
    public function setName($name) {$this->name = $name;}
    public function setDescription($description) {$this->description = $description;}
        

    public function __toString() : string
    {
        $weapon = '<div class="row">';
        $weapon .= '<div class="col-3">';
        $weapon .= '<img src=" '. $this->image_path .'"></div>';
        $weapon .= '<div class="col-auto">';
        $weapon .= '<h2>' . $this->name . '</h2>';
        $weapon .= '<p>'. $this->description . '</p></div></div>';

        return $weapon;
    }
} 

$weapon1 = new Weapon('epee','sources/epee/epee1.png','A cuting weapon');
$weapon2 =  new Weapon('arc', 'sources/arc/arc1.png', 'A distante weapon');
$weapon3 =  new Weapon('hache', 'sources/hache/hache1.png', 'A cuting weapon or an tool that allows to cut wood');
$weapon4 =  new Weapon('fleau', 'sources/fleau/fleau1.png','A cuting weapon or an tool that allows to cut wood');

$weapons = [$weapon1, $weapon2, $weapon3, $weapon4];
// echo '<pre>'; print_r($weapons); echo '</pre>';

foreach($weapons as $weapon):
    (($weapon->getName() !== 'arc') ? $random_weapon = rand(1,5) : $random_weapon = rand(1,2)); // display images randomly
        
    $weapon->setImage( 'sources/' . $weapon->getName() . '/' . $weapon->getName() .$random_weapon . '.png' );
endforeach; 
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