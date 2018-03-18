<?php

require_once "bootstrap.php";

$newProductName = $argv[1];
echo $newProductName;

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo "Create Product With ID {$product->getId()}\n";

