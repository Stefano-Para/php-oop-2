<?php 

class User {
    public $name;
    public $surname;
    public $userLevel;
    public $age;

    function __construct(
                $name,
                $surname,
                $userLevel,
                $age) {
        $this->name = $name;
        $this->surname = $surname;
        $this->userLevel = $userLevel;
        $this->age = $age;
    }
} 

echo "Questo è l'User" . "<br>";
$user1 = new User("Scar", "TheDog", "Gold", 6);
$user2 = new User("Bruce", "TheBigCat", "Gold", 5);
$user3 = new User("Steve", "TheSmallCat", "Bronze", 3);

echo "<hr>";