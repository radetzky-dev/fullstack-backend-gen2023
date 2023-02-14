<?php

interface Salario
{
    public function setSalary(int $money): void;
    public function getSalary();
}

interface PersonTemplate extends Salario
{
    public function setAnag($name, $surname, $address);
    public function getData();
}

class Person implements PersonTemplate
{
    private $vars = [];
    private $salary = 0;

    public function setAnag($name, $surname, $address): void
    {
        $this->vars["address"] = $address;
        $this->vars["name"] = $name;
        $this->vars["surname"] = $surname;
    }

    /**
     * setSalary
     *
     * @param  mixed $money
     * @return void
     */
    public function setSalary(int $money): void
    {
        $this->salary = $money;
    }

    /**
     * getSalary
     *
     * @return int
     */
    public function getSalary(): int
    {
        return $this->salary;
    }

    public function getData()
    {
        $result = "";
        foreach ($this->vars as $name => $value) {
            $result = $result . " $name -> $value  <br>";
        }
        return $result;
    }
}

$person = new Person();
$person->setAnag("mario", "rossi", "via Milano 6");
echo $person->getData();
echo "<br>" . $person->getSalary();
echo "<br>" . $person->setSalary(1000);
echo "<br>" . $person->getSalary();


class Base
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

echo '<hr>';

trait HelloWorld
{
    public function sayHi()
    {
        echo 'Hi World!';
    }

    public function calcolaCodiceFiscale($vars)
    {
        echo "Il tuo codice fiscale è " . $vars;
    }
}

interface Ciao
{
    public function saluta();
}

/**
 * TheWorldIsNotEnough
 */
class TheWorldIsNotEnough extends Base implements Ciao
{
    use HelloWorld, SayWorld;
    public function sayCiao()
    {
        echo 'Ciao mondo!';
    }

    public function saluta()
    {
        return "Ciao";
    }
}

$a = new TheWorldIsNotEnough();
$a->sayHello();
$a->sayHi();
$a->sayCiao();
$a->calcolaCodiceFiscale("ksdfhgs73");
echo "<br>" . $a->saluta();


abstract class Salary
{
    abstract protected function setSalary(int $money);
    abstract protected function getSalary();
    // Common method
    public function printOut()
    {
        print "Metodo astratto " . $this->getSalary() . "<br>";
    }
}

class Employee extends Salary implements Ciao
{
    private $salary;

    private $name;
    private $surname;

    public function __construct($name, $surname, $salary = 0)
    {
        $this->salary = $salary;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function setSalary(int $money): void
    {
        $this->salary = $money;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function saluta()
    {
        return "<br>HELLO " . $this->name . " " . $this->surname . "<br>";
    }
}

echo "<hr>IMPIEGATO<BR>";
$impiegato = new Employee("Mario", "Rossi", 57);
echo $impiegato->saluta();
echo "<br>" . $impiegato->getSalary() . '<br>';
$impiegato->setSalary(400);
echo "<br>" . $impiegato->getSalary() . '<br>';
echo $impiegato->printOut();
