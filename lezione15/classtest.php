<?php

//Doc: https://www.php.net/manual/en/classobj.examples.php

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

class Spinach extends Vegetable
{
    public $cooked = true;

    public function __construct()
    {
        parent::__construct("spinacio", true, "green");
        
    }

    public function cook()
    {
        $this->cooked = true;
    }

    public function isCooked()
    {
        return $this->cooked;
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


echo "<hr>";
$vegSpinacio = new Spinach();
echo "Veg: ".$vegSpinacio->getName()." :";
if ($vegSpinacio->isEdible()) {
    echo "<br>Si può mangiare";
} else {
    echo "<br>NON può mangiare";
}
echo "<br>Che colore ?" . $vegSpinacio->getColor();

echo "<br>";
if ($vegSpinacio->isCooked()) {
    echo "<br>Si, è cotto";
} else {
    echo "<br>NON è cotto";
}
