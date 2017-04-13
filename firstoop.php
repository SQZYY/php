<?php

class Car
{
    public $color;
    public $speed;

    public function defaultCar()
    {
        $this->color = 'White';
        $this->speed = 180;
    }
}

$firstCar = new Car();
$secondCar = new Car();

$firstCar->color = 'Black ';
$firstCar->speed = 160;
$secondCar->color = 'Red ';
$secondCar->speed = 190;

echo $firstCar->color;
echo $firstCar->speed . '<br>';
echo $secondCar->color;
echo $secondCar->speed . '<br>';

class Tv
{
    public $trademark;
    public $diagonal;

    public function defaultTv()
    {
        $this->trademark = 'LG';
        $this->diagonal = 38;
    }
}

$firstTv = new Tv();
$secondTv = new Tv();

$firstTv->trademark = 'Samsung ';
$firstTv->diagonal = 38.5;
$secondTv->trademark = 'Sony ';
$secondTv->diagonal = 50;

echo $firstTv->trademark;
echo $firstTv->diagonal . '<br>';
echo $secondTv->trademark;
echo $secondTv->diagonal . '<br>';

class BallPointPen
{
    public $trademark;
    public $color;

    public function defaultPen()
    {
        $this->trademark = 'Parker';
        $this->color = 'Black';
    }
}

$firstPen = new BallPointPen();
$secondPen = new BallPointPen();

$firstPen->trademark = 'Waterman - ';
$firstPen->color = 'Blue';
$secondPen->trademark = 'Cross - ';
$secondPen->color = 'Light Blue';

echo $firstPen->trademark;
echo $firstPen->color . '<br>';
echo $secondPen->trademark;
echo $secondPen->color . '<br>';

class Duck
{
    public $name;
    public $color;

    public function defaultDuck()
    {
        $this->name = 'Donald';
        $this->color = 'White';
    }
}

$firstDuck = new Duck();
$secondDuck = new Duck();

$firstDuck->name = 'Michael - ';
$firstDuck->color = 'Gray';
$secondDuck->name = 'Sean - ';
$secondDuck->color = 'Yellow';

echo $firstDuck->name;
echo $firstDuck->color . '<br>';
echo $secondDuck->name;
echo $secondDuck->color . '<br>';

class Product
{
    public $price;
    public $discount;

    public function defaultProduct()
    {
        $this->price = 50000;
        $this->discount = 10;
    }
}

$firstProduct = new Product();
$secondProduct = new Product();

$firstProduct->price = '45000 - ';
$firstProduct->discount = '5%';
$secondProduct->price = '30000 - ';
$secondProduct->discount = '15%';

echo $firstProduct->price;
echo $firstProduct->discount . '<br>';
echo $secondProduct->price;
echo $secondProduct->discount;