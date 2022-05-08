<?php
class Weapon 
{
    private static $increment = 1; // property to autoincrement the weapon id
    private static $weapons = []; // array to store all weapons

    private string $id;
    private string $name;
    private int $damage;

    public function __construct ($name, $damage) {
        $this->id = self::$increment; // first $id = 1 
        self::$increment++; // increment by 1 the $increment counter
        $this->name = $name;
        $this->damage = $damage;
        self::$weapons[] = $this; // add objet weapon to the array each time a new Weapon is created
    }

    // Getters allow to have access to the private properties outside the class
    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getDamage(): int { return $this->damage; }

    // Setters allow to change the properties of each new instance
    public function setName(): void {  $this->name; }
    public function setDamage(): void {  $this->damage; }

    public function __toString(): string
    {
        $txt = '<p>ID : ' . $this->id . '</p>';
        $txt .= '<p>Name : ' . $this->name . '</p>';
        $txt .= '<p>Strength : ' . $this->damage . '</p>';

        return $txt;
    }

    // recover a weapon according to it's ID
    public static function recoverWeapon($id) {
        // loop through the array of weapons
        foreach(self::$weapons as $weapon) {
            if($id === $weapon->id) { // recover a Weapon object that can be displayed on the page
                return $weapon;
            } 
        }
    }
}