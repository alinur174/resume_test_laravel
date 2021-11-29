<?php


namespace App\Services\AdminService;
use App\Models\Resume;
use App\Services\AdminService\IAdminService;

class AdminServiceMock implements IAdminService
{

    public function getMonth($month)
    {
        // TODO: Implement getMonth() method.
    }

    public function downloadPDF(Resume $resume  )
    {
        // TODO: Implement downloadPDF() method.
    }

}
