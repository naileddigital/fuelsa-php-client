<?php

include('../index.php');

$client = new FuelSAClient('5b4dd9ab47564650ae4c22a3b42a1ed81');

$result = $client->getCurrentFuelPrices();
echo '$client->getCurrentFuelPrices()' . $result;

$result = $client->getFuelPricesByYear(2020);
echo '$client->getFuelPricesByYear(2020)' . $result;

?>