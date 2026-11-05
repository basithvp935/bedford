<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produce extends Model
{
    protected $table = "produces";

    protected $guarded = [];

    public function category()
    {
      return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function getProduceImages()
    {
        return $this->hasMany(ProduceDetail::class, 'produce_id', 'id');
    }

}
