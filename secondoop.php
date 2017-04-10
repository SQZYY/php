<?php

class Factory
{
    public $color = 'white';
    public $speed = 100;
}
class Car extends Factory
{
    public $color = 'white';
    public $speed = 100;

    public function firstCar() {
        $this->color = 'blue';
        $this->speed = 150;
    }
    public function secondCar() {
        $this->color = 'black';
        $this->speed = 110;
    }
}
$car = new Car();
echo $car->color;
echo '<br/>';
echo $car->speed;
echo '<br/>';
echo '<br/>';

$car->firstCar();
echo $car->color;
echo '<br/>';
echo $car->speed;
echo '<br/>';
echo '<br/>';

$car->secondCar();
echo $car->color;
echo '<br/>';
echo $car->speed;
echo '<br/>';
echo '<br/>';

class Shop
{
    public $channel = 1;
    public $size = 20;
}
class Tv extends Shop
{
    public $channel = 1;
    public $size = 20;

    public function firstTv() {
        $this->channel = 2;
        $this->size = 40;
    }
    public function secondTv() {
        $this->channel = 3;
        $this->size = 60;
    }
}
$tv = new Tv();
echo $tv->channel;
echo '<br/>';
echo $tv->size;
echo '<br/>';
echo '<br/>';

$tv->firstTv();
echo $tv->channel;
echo '<br/>';
echo $tv->size;
echo '<br/>';
echo '<br/>';

$tv->secondTv();
echo $tv->channel;
echo '<br/>';
echo $tv->size;
echo '<br/>';
echo '<br/>';

class Office
{
    public $color = 'red';
    public $button = 'yes';
}
class Pen extends Office
{
    public $color = 'red';
    public $button = 'yes';

    public function firstPen() {
        $this->color = 'black';
        $this->button = 'no';
    }
    public function secondPen() {
        $this->color = 'green';
        $this->button = 'yes';
    }
}
$pen = new Pen();
echo $pen->color;
echo '<br/>';
echo $pen->button;
echo '<br/>';
echo '<br/>';

$pen->firstPen();
echo $pen->color;
echo '<br/>';
echo $pen->button;
echo '<br/>';
echo '<br/>';

$pen->secondPen();
echo $pen->color;
echo '<br/>';
echo $pen->button;
echo '<br/>';
echo '<br/>';

class Animal
{
    public $color = 'gray';
    public $growth = 50;
}
class Duck extends Animal
{
    public $color = 'gray';
    public $growth = 50;

    public function firstDuck() {
        $this->color = 'black';
        $this->growth = 40;
    }
    public function secondDuck() {
        $this->color = 'white';
        $this->growth = 70;
    }
}
$duck = new Duck();
echo $duck->color;
echo '<br/>';
echo $duck->growth;
echo '<br/>';
echo '<br/>';

$duck->firstDuck();
echo $duck->color;
echo '<br/>';
echo $duck->growth;
echo '<br/>';
echo '<br/>';

$duck->secondDuck();
echo $duck->color;
echo '<br/>';
echo $duck->growth;
echo '<br/>';
echo '<br/>';

class Export
{
    public $price = 40000;
    public $discount = 50;
}
class Product extends Export
{
    public $price = 40000;
    public $discount = 50;

    public function firstProduct() {
        $this->price = 30000;
        $this->discount = 40;
    }
    public function secondProduct() {
        $this->price = 100000;
        $this->discount = 70;
    }
}
$product = new Product();
echo $product->price;
echo '<br/>';
echo $product->discount;
echo '<br/>';
echo '<br/>';

$product->firstProduct();
echo $product->price;
echo '<br/>';
echo $product->discount;
echo '<br/>';
echo '<br/>';

$product->secondProduct();
echo $product->price;
echo '<br/>';
echo $product->discount;
echo '<br/>';
echo '<br/>';