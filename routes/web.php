<?php

use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use Picqer\Barcode\BarcodeGeneratorPNG;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/recibo-pdf', function () {
    $pdf = PDF::loadView('pdf.recibo');

    return $pdf->stream('exemplo.pdf');
});

Route::get('/os-pdf', function () {
    $generator = new BarcodeGeneratorPNG();
    $barcode = $generator->getBarcode(100, $generator::TYPE_CODE_128);
    $codigoBarras = base64_encode($barcode);

    $pdf = PDF::loadView('pdf.ordem-servico', [
        "codigoBarras" => $codigoBarras
    ]);

    return $pdf->stream('exemplo.pdf');
});


Route::get('/pedido-pdf', function () {
    $pdf = PDF::loadView('pdf.pedido');

    return $pdf->stream('exemplo.pdf');
});

Route::get('/orcamento-pdf', function () {
    $pdf = PDF::loadView('pdf.orcamento');

    return $pdf->stream('exemplo.pdf');
});