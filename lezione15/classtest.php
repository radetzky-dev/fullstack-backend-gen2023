<?php

//Doc: https://www.php.net/manual/en/classobj.examples.php

//Esempi: https://howto.webarea.it/php/classi-metodi-proprieta-in-php_174

class Vegetable
{
    public $edible;
    public $color;
    public $name;
    public int $pimentLevel=0;

    public function __construct($name, $edible, $color = "green")
    {
        $this->edible = $edible;
        $this->color = $color;
        $this->name = $name;
    }

    public function sayHello() 
    {
        echo "Hello!";
    }

    public function aggiungiPiccante()
    {
        $this->pimentLevel+=1;
        $this->showPiccante();
    }

    private function showPiccante()
    {
        echo "Il livello di piccantezza è ".$this->pimentLevel.'<br>';
    }

    public function isEdible()
    {
        return $this->edible;
    }

    public function getColor()
    {
        return $this->color;
    }


    final public function getName()  //non si può fare override
    {
        return $this->name;
    }
}

class Spinach extends Vegetable
{
    public const FLAVOUR = "good";
    public $cooked = true;
    public static $consitency ="Very good";
    public static $cooktime = 10;

    public function __construct()
    {
        parent::__construct("spinacio", true, "green");
        
    }

    public function sayHello() //override perché non è final
    {
        echo "Hi potato!";
    }
    public static function cookDuration()
    {
        return self::$cooktime;
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

$vegGreen->aggiungiPiccante();

if ($vegGreen->isEdible()) {
    echo "<br>Si può mangiare";
} else {
    echo "<br>NON può mangiare";
}

echo "<br>Che colore ?" . $vegGreen->getColor();

$vegGreen->aggiungiPiccante();
$vegGreen->sayHello();

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

echo "<br>Test: " .Spinach::$consitency;
echo "<br>Duration: " .Spinach::cookDuration();
echo "<br>Flavour: " .Spinach::FLAVOUR;

$vegSpinacio = new Spinach();
echo "<br>Veg: ".$vegSpinacio->getName()." :";
echo "Consistenza ". $vegSpinacio::$consitency.'<br>';
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
echo "<hr>";
$vegSpinacio->sayHello();