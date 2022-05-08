<?php
class House {
    private static $increment = 1;

    private int $id;
    private int $creation_date;
    private int $rooms;
    private int $size;

    public function __construct ($creation_date, $rooms, $size) {
        $this->id = self::$increment; // the first house will have id 1
        self::$increment++; // the id will autoincrement 
        $this->creation_date = $creation_date;
        $this->rooms = $rooms;
        $this->size = $size;
    }

    // Getters allow to have access to the private properties outside the class
    public function getId(): string { return $this->id; }
    public function getDate(): string { return $this->creation_date; }
    public function getRooms(): string { return $this->rooms; }
    public function getSize(): int { return $this->size; }
}