<?php

namespace App\Services\AdminService;

use App\Models\Resume;
use App\Services\AdminService\IAdminService;

class AdminService implements IAdminService
{

    public function downloadPDF(Resume $resume)
    {
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('pdf', compact('resume'));
        return $pdf->download('resumes.pdf');
    }


    public function getMonth($month)
    {
        switch ($month) {
            case 'january':
                return '01';
            case 'february':
                return '02';
            case 'march':
                return '03';
            case 'april':
                return '04';
            case 'may':
                return '05';
            case 'june':
                return '06';
            case 'july':
                return '07';
            case 'august':
                return '08';
            case 'september':
                return '09';
            case 'october':
                return '10';
            case 'november':
                return '11';
            case 'december':
                return '12';

        }

    }
}
