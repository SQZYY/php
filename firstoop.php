<?php

class Car
{
    public $color = 'white';
    public $speed = 100;

    public function firstCar() {
        $car = new Car();
        $car->color = 'blue';
        $car->speed = '120';
    }
    public function secondCar() {
        $anotherCar = new Car();
        $anotherCar->color = 'black';
        $anotherCar->speed = '110';
    }
}

class Tv
{
    public $channel = 1;
    public $size = 20;

    public function firstTv() {
        $tv = new Tv();
        $tv->channel = 2;
        $tv->size = 40;
    }
    public function secondTv() {
        $tv = new Tv();
        $tv->channel = 3;
        $tv->size = 60;
    }
}

class Pen
{
    public $color = 'red';
    public $button = 'yes';

    public function firstPen() {
        $pen = new Pen();
        $pen->color = 'black';
        $pen->button = 'no';
    }
    public function secondPen() {
        $pen = new Pen();
        $pen->color = 'green';
        $pen->button = 'yes';
    }
}

class Duck
{
    public $color = 'gray';
    public $growth = 50;

    public function firstDuck() {
        $duck = new Duck();
        $duck->color = 'black';
        $duck->growth = 40;
    }
    public function secondDuck() {
        $duck = new Duck();
        $duck->color = 'white';
        $duck->growth = 70;
    }
}

class Product
{
    public $price = 40000;
    public $discount = 50;

    public function firstProduct() {
        $product = new Product();
        $product->price = 30000;
        $product->discount = 40;
    }
    public function secondProduct() {
        $product = new Product();
        $product->price = 100000;
        $product->discount = 70;
    }
}