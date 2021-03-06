<?php

interface Father
{
    public function things($color, $trademark, $price, $discount, $name);
}

class Car implements Father
{
    public $color = 'Black';
    public $trademark = 'Audi';
    public $price = 900000;
    public $discount = 10;
    public $speed = 200;

    public function things($color, $trademark, $price, $discount, $name){}
}

$car = new Car();

$car->color;
$car->trademark;
$car->price;
$car->discount;
$car->speed;

class FastCar extends Car{}

$fastCar = new FastCar();

$fastCar->color = 'Red';
$fastCar->trademark = 'BMW';
$fastCar->price = 15000000;
$fastCar->discount = 5;
$fastCar->speed = 220;

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

class FullHd extends Tv{}

$fullHd = new FullHd();

$fullHd->trademark = 'LG';
$fullHd->price = 50000;
$fullHd->discount = 5;
$fullHd->diagonal = 45;

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

class OtherPen extends BallPointPen {}

$otherPen = new OtherPen();

$otherPen->color = 'Green';
$otherPen->trademark = 'Erich Krause';
$otherPen->price = 200;

class Duck implements Father
{
    public $color;
    public $name;

    public function things($color, $trademark, $price, $discount, $name){}
}

$duck = new Duck();

$duck->color = 'Gray';
$duck->name = 'Sean';

class Anas extends Duck {}

$anas = new Anas();

$anas->color = 'Brown';
$anas->name = 'River Duck';

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

class Pullover extends Product {}

$pullover = new Pullover();

$pullover->trademark = 'Adidas';
$pullover->price = 3000;
$pullover->discount = 15;
$pullover->name = 'Autumn Collection';

//ДОПОЛНИТЕЛЬНОЕ ЗАДАНИЕ

class Product
{
    public $price;
    public $discount = 10;
    public $weight;
    public $delivery;
}

class Apple extends Product
{
    public $price = 107;
    public function getPrice()
    {
        if ($this->discount) {
            return round($this->price - ($this->price / 100 * $this->discount));
        }
    }
}

$apple = new Apple();
echo $apple->getPrice() . '<br>';

class Meat extends Product
{
    public $price = 423;
    public function getPrice()
    {
        if ($this->discount) {
            return round($this->price - ($this->price / 100 * $this->discount) );
        }
    }
}

$meat = new Meat();
echo $meat->getPrice() . '<br>';

class Rice extends Product
{
    public $price = 58;
    public $weight = 11;
    public function weightPrice()
    {
        if ($this->weight > 10) {
            return round($this->price - ($this->price / 100 * $this->discount));
        }
    }
}

$rice = new Rice();
echo $rice->weightPrice() . '<br>';

class Delivery extends Product
{
    public function deliveryPrice()
    {
        if ($this->discount > 0)
        {
            return 300;
        }
        else {
            return 250;
        }
    }
}

$delivery = new Delivery();
echo $delivery->deliveryPrice();