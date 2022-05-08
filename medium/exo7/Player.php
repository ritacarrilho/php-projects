<?php
class Player 
{
    private string $name;
    private int $strength;
    private int $pv;
    private int $weapon_id;

    public function __construct () 
    {
        $this->strength = 5;
        $this->pv = 100;
    }

    // Getters allow to have access to the private properties outside the class
    public function getName(): string { return $this->name; }
    public function getStrength(): int { return $this->strength; }
    public function getPv(): int { return $this->pv; }
    public function getWeaponId(): int { return $this->weapon_id; }

    // Setters allow to change the properties of each new instance
    public function setName($name) { $this->name = $name; }
    public function setStrength($strength) { $this->strength = $strength; }
    public function setPv($pv) { $this->pv = $pv; }
    public function setIdWeapon($weapon_id) { $this->weapon_id = $weapon_id; }

    // Property to display object
    public function __toString(): string
    {
        $weapon = Weapon::recoverWeapon($this->weapon_id); // get the matching weapon id
        $txt = '<p>Name : ' . $this->name . '</p>';
        $txt .= '<p>Strength : ' . $this->strength . '</p>';
        $txt .= '<p>PV : ' . $this->pv . '</p>';
        $txt .= '<p>Weapon : ' . $this->weapon_id . '</p>';
        $txt .= $weapon;  // print the weapon object (not only ht id)

        
        return $txt;
    }

}