<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{

    protected $fillable = ['title','date','description','status'];
    use HasFactory;

    protected $casts = [
        'date' => 'datetime',
    ];
}
