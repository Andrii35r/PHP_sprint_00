<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Tower {
    public $flors;
    private $elevator;
    private $arc_capacity;
    private $height;

    public function hasElevator() {
        return $this->elevator;
    }

    public function setElevator($elevator) {
        $this->elevator = $elevator;
    }

    public function hasArcCapacity() {
        return $this->arc_capacity;
    }

    public function setArcCapacity($arc_capacity) {
        $this->arc_capacity = $arc_capacity;
    }

    public function hasHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }

    public function floorHeight() {
        return $this->height / $this->flors;
    }

}

$tower = new Tower();
echo "Flors: ";
$tower->flors = 93;
echo $tower->flors;
$tower->setElevator(true);

if ($tower->hasElevator()) {
    echo "<br>Elevator: +";
}
else {
    echo "<br>Elevator: -";
}

$tower->setArcCapacity(70);
echo "<br>Arc Capacity: ";
echo $tower->hasArcCapacity();

$tower->setHeight(1130);
echo "<br>Height: ";
echo $tower->hasHeight();

echo "<br>Floor Height: ";
echo $tower->floorHeight();
?>
</body>
</html>