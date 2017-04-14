<?php

interface Father
{
    public function things($color, $trademark, $price, $discount, $name);
}

class Car implements Father
{
    public $color;
    public $trademark;
    public $price;
    public $discount;
    public $speed;

    public function things($color, $trademark, $price, $discount, $name){}
}

$car = new Car();

$car->color = 'Black';
$car->trademark = 'Audi';
$car->price = 900000;
$car->discount = 10;
$car->speed = 200;

class Tv implements Father
{
    public $trademark;
    public $price;
    public $discount;
    public $diagonal;

    public function things($color, $trademark, $price, $discount, $name){}
}

$tv = new Tv();

$tv->trademark = 'Sony';
$tv->price = 60000;
$tv->discount = 15;
$tv->diagonal = 40;

class BallPointPen implements Father
{
    public $color;
    public $trademark;
    public $price;

    public function things($color, $trademark, $price, $discount, $name){}
}

$pen = new BallPointPen();

$pen->color = 'Blue';
$pen->trademark = 'Cross';
$pen->price = 2000;

class Duck implements Father
{
    public $color;
    public $name;

    public function things($color, $trademark, $price, $discount, $name){}
}

$duck = new Duck();

$duck->color = 'Gray';
$duck->name = 'Sean';

class Product implements Father
{
    public $trademark;
    public $price;
    public $discount;
    public $name;

    public function things($color, $trademark, $price, $discount, $name){}
}

$product = new Product();

$product->trademark = 'Karcher';
$product->price = 60000;
$product->discount = 10;
$product->name = 'Vacuum cleaner';