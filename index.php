<?php
require 'vendor/autoload.php';
use Dompdf\Dompdf;
use iio\libmergepdf\Merger;

$html = '<p>A assinatura deste TERMO DE CONTRATAÇÃO representa expressa concordância do CLIENTE às cláusulas do CONTRATO DE PRESTAÇÃO DE SERVIÇOS DE COMUNICAÇÃO MULTIMÍDIA</p>';

$dompdf = new Dompdf();

$merger = new Merger();

$dompdf->loadHtml($html);