<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
// use \Mpdf\Mpdf as PDF; 
use Illuminate\Support\Facades\Storage;

class MPDFController extends Controller
{
    public function generatePDF()
    {
        $htmlContent = '<h1>helloooooo</h1>';
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($htmlContent);
        $mpdf->Output();
    }
}
