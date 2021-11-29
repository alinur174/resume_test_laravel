<?php


namespace App\Services\AdminService;


use App\Models\Resume;

interface IAdminService
{
    public function getMonth($month);

    public function downloadPDF(Resume $resume);

}
