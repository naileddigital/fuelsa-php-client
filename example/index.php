<?php

include('../index.php');

$client = new FuelSAClient('YOUR-API-KEY');

$result = $client->getCurrentFuelPrices();
echo '$client->getCurrentFuelPrices()' . $result;

$result = $client->getFuelPricesByYear(2020);
echo '$client->getFuelPricesByYear(2020)' . $result;

?>