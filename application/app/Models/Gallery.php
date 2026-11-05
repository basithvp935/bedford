<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = "tbl_gallery";

    protected $guarded = [];

    public function gallery_details()
    {
        return $this->hasMany(GalleryDetail::class, 'gallery_id', 'id')->orderBy('id', 'desc');
    }
}
