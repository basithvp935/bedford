<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProduceDetail extends Model
{
    protected $table = "produce_details";

    protected $guarded = [];

    public function produce()
    {
      return $this->belongsTo(Produce::class, 'produce_id', 'id');
    }

}
