<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>essa é nossa atividade e projeto pratico do modulo. /br</h1>');
$mpdf->Output();