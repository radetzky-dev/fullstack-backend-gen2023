<?php
class Vegetable
{
    public $edible;
    public $color;
    public $name;

    public function __construct($name, $edible, $color = "green")
    {
        $this->edible = $edible;
        $this->color = $color;
        $this->name = $name;
    }

    public function isEdible()
    {
        return $this->edible;
    }

    public function getColor()
    {
        return $this->color;
    }


    public function getName()
    {
        return $this->name;
    }
}

$vegGreen = new Vegetable("asparago", true);
echo "Veg: ".$vegGreen->getName()." :";

if ($vegGreen->isEdible()) {
    echo "<br>Si può mangiare";
} else {
    echo "<br>NON può mangiare";
}

echo "<br>Che colore ?" . $vegGreen->getColor();

echo "<hr>";
$vegBlue = new Vegetable("mango blu", false, "blue");
echo "Veg: ".$vegBlue->getName()." :";
if ($vegBlue->isEdible()) {
    echo "<br>Si può mangiare";
} else {
    echo "<br>NON può mangiare";
}
echo "<br>Che colore ?" . $vegBlue->getColor();
