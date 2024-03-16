<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generatePdf(){
        $data = ['title' => 'domPDF in Laravel 10'];
        $pdf = PDF::loadView('pdf.document', $data);
        return $pdf->download('document.pdf');
    }
}
