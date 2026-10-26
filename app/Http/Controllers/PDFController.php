<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generate(){
        $guru = Guru::all();

        $pdf = Pdf::loadView('pdfguru', ['guru' => $guru]);
        
        return $pdf->stream('guru.pdf');
    }

    
}