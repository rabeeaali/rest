<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileUploadService
{
    public function __construct(
        public $path,
        public $file,
        public $disk = 'public',
    ) {
    }

    public function uploadFile()
    {
        Storage::disk($this->disk)->put($this->path, $this->file, 'public');

        return $this->file->hashName();
    }

    public function deleteFile()
    {
        Storage::disk($this->disk)->delete($this->path, $this->file);
    }
}
