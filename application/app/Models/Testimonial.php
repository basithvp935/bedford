<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model

{

    protected $table = "tbl_testimonials";
    protected $guarded = [];

    public function testimonial_category()
    {
      return $this->belongsTo(TestimonialCategory::class, 'testimonial_category_id', 'id');
    }

}

