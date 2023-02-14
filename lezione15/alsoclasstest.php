<?php

interface Salario
{
    public function setSalary($money);
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

    public function setAnag($name, $surname, $address)
    {
        $this->vars["address"] = $address;
        $this->vars["name"] = $name;
        $this->vars["surname"] = $surname;
    }

    public function setSalary($money)
    {
        $this->salary = $money;
    }

    public function getSalary()
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
