<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
use iio\libmergepdf\Merger;

$loader = new \Twig\Loader\FilesystemLoader('.');
$twig = new \Twig\Environment($loader, [ 'cache' => false,]);
$html = $twig->render('index.twig');

$dompdf = new Dompdf(['isPhpEnabled' => true, 'isRemoteEnabled' => true, 'isHtml5ParserEnabled' => true, 'defaultPaperSize' => 'A4']);

$merger = new Merger();

$dompdf->loadHtml($html);