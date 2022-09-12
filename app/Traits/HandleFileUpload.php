<?php

namespace App\Traits;

use App\Services\FileUploadService;

trait HandleFileUpload
{
    protected function fileUpload($path, $file, $disk = 'public')
    {
        return (new FileUploadService($path, $file, $disk))->uploadFile();
    }

    protected function deleteOldFile($path, $file, $disk = 'public')
    {
        return (new FileUploadService($path, $file, $disk))->deleteFile();
    }
}
