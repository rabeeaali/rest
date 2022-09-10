<?php

namespace App\Traits;

use App\Services\FileUploadService;

trait HandleFileUpload
{
    /**
     * Store File Upload To S3/Local
     */
    protected function fileUpload($path, $file, $disk = 'public')
    {
        return (new FileUploadService($path, $file, $disk))->uploadFile();
    }

    /**
     * Delete Old File From S3/Local
     */
    protected function deleteOldFile($path, $file, $disk = 'public')
    {
        return (new FileUploadService($path, $file, $disk))->deleteFile();
    }
}
