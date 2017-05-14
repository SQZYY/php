<?php

class Car
{
    public $trademark;
    public $speed = 180;
    public $color = 'White ';

    public function __construct()
    {
        if ($this->speed > 160) {
            $this->trademark = 'BMW ';
            $this->color;
            $this->speed = 200;
        } else {
            $this->trademark = 'Audi ';
            $this->color = 'Black ';
            $this->speed = 150;
        }
    }
}

$firstCar = new Car();
$secondCar = new Car();

echo $firstCar->color;
echo $firstCar->trademark;
echo $firstCar->speed . '<br>';
echo $secondCar->color = 'Red ';
echo $secondCar->trademark = 'Mercedes ';
echo $secondCar->speed = 180 . '<br>';

class Tv
{
    public $trademark;
    public $wifi = 'Yes ';
    public $diagonal;

    public function __construct()
    {
        if ($this->wifi === 'No') {
            $this->trademark = 'LG ';
            $this->diagonal = 50;
        } else {
            $this->trademark = 'JVC ';
            $this->wifi = 'No ';
            $this->diagonal = 15;
        }
    }
}

$firstTv = new Tv();
$secondTv = new Tv();

echo $firstTv->trademark;
echo $firstTv->wifi;
echo $firstTv->diagonal . '<br>';
echo $secondTv->trademark = 'Samsung ';
echo $secondTv->wifi = 'Yes ';
echo $secondTv->diagonal = 45 . '<br>';

class BallPointPen
{
    public $trademark;
    public $color = 'Blue ';

    public function __construct()
    {
        if ($this->color === 'Blue ') {
            $this->trademark = 'Parker';
        } else {
            $this->trademark = 'Cross';
            $this->color = 'Green ';
        }
    }
}

$firstPen = new BallPointPen();
$secondPen = new BallPointPen();

echo $firstPen->color;
echo $firstPen->trademark . '<br>';
echo $secondPen->color = 'Black ';
echo $secondPen->trademark = 'Waterman' . '<br>';

class Duck
{
    public $name = 'Donald ';
    public $color;

    public function __construct()
    {
        if ($this->name === 'Donald ') {
            $this->color = 'White';
        } else {
            $this->name = 'Sean ';
            $this->color = 'Yellow';
        }
    }
}

$firstDuck = new Duck();
$secondDuck = new Duck();

echo $firstDuck->name;
echo $firstDuck->color . '<br>';
echo $secondDuck->name = 'Michael ';
echo $secondDuck->color = 'Gray' . '<br>';

class Product
{
    public $price = 45000;
    public $discount;

    public function __construct()
    {
        if ($this->price >= 30000) {
            $this->discount = ' 15%';
        } else {
            $this->discount = ' 10%';
        }
    }
}

$firstProduct = new Product();
$secondProduct = new Product();

echo $firstProduct->price;
echo $firstProduct->discount . '<br>';
echo $secondProduct->price = 20000;
echo $secondProduct->discount = ' 5%' . '<br>';