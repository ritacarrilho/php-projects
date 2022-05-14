<?php 
session_start(); 

ob_start(); 
$titre = "Exo 8 : OOP "; 
?>

<?php
// EXO8 : class weapon save info into Session
class Weapon{
    private string $name;
    private int $level;
    private int $level_max;
    private string $description;

    public function __construct($name, $description, $max_level)
    {
        $this->name= $name;
        $this->level= 1;
        $this->level_max = $max_level;
        $this->description= $description;
    }

    // Getters
    public function getName(): string { return $this->name; }
    public function getLevel(): string { return $this->level; }
    public function getMaxLevel(): string { return $this->level_max; }
    public function getDescription(): string { return $this->description; }

    // Setters
    public function setLevel($level) {$this->level = $level;}
    public function setMaxLevel($level_max) {$this->level_max = $level_max;}
    public function setName($name) {$this->name = $name;}
    public function setDescription($description) {$this->description = $description;}

    public function __toString() : string
    {
        $weapon = '<div class="row">';
            $weapon .= '<div class="col-3">';
                $weapon .= '<img src=" '. $this->getImagePath() .'"></div>';
            $weapon .= '<div class="col-1"><form method="get">';
                $weapon .= '<select onChange="submit()" id="weapon" name="level' . $this->name .'">';
                        for($i = 1; $i <= $this->level_max; $i++) {
                            $weapon .= '<option value="'. $i .'"';
                            $weapon .= ($i === (int)$_SESSION[$this->name]) ? 'selected' : ''; // save the selected level once the form is submited
                            $weapon .= '>' . $i . '</option>';
                        }
                $weapon .= '</select></form></div>';
            $weapon .= '<div class="col-auto">';
                $weapon .= '<h2>' . $this->name . '</h2>';
                $weapon .= '<p>'. $this->description . '</p>';
        $weapon .= '</div></div>';

        return $weapon;
    }

    // delete all spaecial characters from weapon name to get each image path
    public function getImagePath() {
        $search = ['à', 'é', 'à', 'ç', 'è']; // variable with special characters 
        $replace = ['a', 'e', 'a', 'c', 'e'];

        //(($this->name !== 'arc') ? $this->level = rand(1,5) : $this->level = rand(1,2));  display images randomly
        $name_without_accents = str_replace($search, $replace, $this->name);

        return 'sources/' . $name_without_accents . '/' . $name_without_accents . $this->level . '.png';
    } 
} 

// instanciate class and create weapons
$weapon1 = new Weapon('épée','A cuting weapon', 5);
$weapon2 =  new Weapon('arc', 'A distante weapon', 2);
$weapon3 =  new Weapon('hache', 'A cuting weapon or an tool that allows to cut wood', 5);
$weapon4 =  new Weapon('fleau', 'A cuting weapon or an tool that allows to cut wood', 5);

$weapons = [$weapon1, $weapon2, $weapon3, $weapon4];

// change image name/number according to the level
foreach($weapons as $weapon) {
    // session variables
    if(!isset($_SESSION[$weapon->getName()])) {
        $_SESSION[$weapon->getName()] = 1;
    }

    if(isset($_GET['level' . $weapon->getName()])) {
        // $weapon->setLevel($_GET['level' . $weapon->getName()]);
        $_SESSION[$weapon->getName()] = $_GET['level' . $weapon->getName()];
    }

    // set each weapon level for the session value
    $weapon->setLevel($_SESSION[$weapon->getName()]);
}


// echo '<pre>'; print_r($_SESSION); echo '</pre>';
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