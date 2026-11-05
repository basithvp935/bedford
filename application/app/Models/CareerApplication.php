<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model

{

    protected $table = "career_applications";
    protected $guarded = [];
    
    public function getCareer(){
        return $this->hasOne(Career::class,"id","career_id");
    }

}

