<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Online admission form submission (separate from CMS Admission page content).
 */
class AdmissionApplication extends Model
{
    protected $table = 'admission_applications';

    protected $guarded = [];

    protected $casts = [
        'siblings' => 'array',
    ];
}
