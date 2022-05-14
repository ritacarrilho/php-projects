<?php ob_start(); 
$titre = "Exo 4 : OOP "; 
?>

<?php
// EXO4 : class weapon
class Weapon{
    public string $name;
    public string $image_path;
    public string $description;

    public function __construct($name, $image_path, $description)
    {
        $this->name= $name;
        $this->image_path= $image_path;
        $this->description= $description;
    }

    // public function __toString() : string
    // {
    //     $weapon = '<div class="row">';
    //     $weapon .= '<div class="col-3">';
    //     $weapon .= '<img src=" '. $this->image_path .'"></div>';
    //     $weapon .= '<div class="col-auto">';
    //     $weapon .= '<h2>' . $this->name . '</h2>';
    //     $weapon .= '<p>'. $this->description . '</p></div></div>';

    //     return $weapon;
    // }

} 

$weapon1 = new Weapon('sword','sources/epee/epee1.png','A cuting weapon');
$weapon2 =  new Weapon('arch', 'sources/arc/arc1.png', 'A distante weapon');
$weapon3 =  new Weapon('axe', 'sources/hache/hache1.png', 'A cuting weapon or an tool that allows to cut wood');
$weapon4 =  new Weapon('chain', 'sources/fleau/fleau1.png','A cuting weapon or an tool that allows to cut wood');

$weapons = [$weapon1, $weapon2, $weapon3, $weapon4];
// echo '<pre>'; print_r($weapons); echo '</pre>';
?>

<div>
    <strong>Here is the list of all weapons : </strong>
</div>

<?php
// display weapons
// foreach($weapons as $weapon): 
// echo $weapon;
// endforeach;  

foreach($weapons as $weapon): ?>
<div class="row">
    <div class="col-3">
        <img src=" <?php echo $weapon->image_path ?>">
    </div>
    <div class="col-auto">
        <h2> <?php echo $weapon->name ?></h2>
        <p> <?php echo $weapon->description ?> </p>
    </div>  
</div>
<?php endforeach; ?>

<?php
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>