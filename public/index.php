<?php
require_once '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader, [

]);



$products = ['oursin', 'baleine', 'coconut', 'bison', 'couscous'];
echo $twig->render('index.html.twig', ['Products' => $products]);