<?php

namespace App\Models\Traits;

use Carbon\Carbon;

trait CreatedAtTrait
{
    public function getDatedAtAttribute()
    {
        return Carbon::parse($this->created_at)->isoFormat('Y-M-D | h:mm a');
    }
}
