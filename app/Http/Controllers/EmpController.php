<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class EmpController extends Controller
{

//    public function getResumes()
//    {
//
//        $resume = Resume::find(1);
//
//        return view('pdf', compact( 'resume'));
//    }

    public function downloadPDF()
    {
        $resume = Resume::find(1);
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pdf', compact('resume'));
        return $pdf->download('resumes.pdf');
    }

}
