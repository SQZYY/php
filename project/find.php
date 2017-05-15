<?php

require __DIR__ . '/vendor/autoload.php';

$api = new \Yandex\Geo\Api();

$api->setQuery($_POST['address']);

$api
    ->setLimit(100)
    ->setLang(\Yandex\Geo\Api::LANG_US)
    ->load();

$response = $api->getResponse();
$response->getQuery();
$response->getLatitude();
$response->getLongitude();

$collection = $response->getList();
foreach ($collection as $item) {
    echo '<strong>Адрес: </strong>' . $item->getAddress() . '<br>';
    echo '<strong>Широта: </strong>' . $item->getLatitude() . '<br>';
    echo '<strong>Долгота: </strong>' . $item->getLongitude() . '<br> <hr>';
}