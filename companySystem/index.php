<?php


abstract class Employe
{
    protected $name;
    protected $salary;
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    abstract public function calculateBonus();
}
interface Workable
{
    public function work();
}

class Manager extends Employe implements Workable
{
    public function __construct($name, $salary)
    {
        parent::__construct($name, $salary);
    }
    public function calculateBonus()
    {
        return $this->salary * 0.20;
    }
    public function work()
    {
        return "Quản lý dự án";
    }
}
class Developer extends Employe implements Workable
{
    public function __construct($name, $salary)
    {
        parent::__construct($name, $salary);
    }
    public function calculateBonus()
    {
        return $this->salary * 0.10;
    }
    public function work()
    {
        return "Lập trình";
    }
}
class Designer extends Employe implements Workable
{
    public function __construct($name, $salary)
    {
        parent::__construct($name, $salary);
    }
    public function calculateBonus()
    {
        return $this->salary * 0.15;
    }
    public function work()
    {
        return "Thiết kế giao diện";
    }
}

$manager = new Manager('A', 2000);
$dev = new Developer('B', 1000);
$designer = new Designer('C', 1500);


echo   $manager->work()  . " Tiền thưởng là : " . $manager->calculateBonus() . '<br>';


echo  $dev->work() . " Tiền thưởng là: " . $dev->calculateBonus() . '<br>';


echo  $designer->work() . " Tiền thưởng là: " . $designer->calculateBonus() . '<br>';
