<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Faculty  extends Model

{
    protected $table = "faculties";
    protected $guarded = [];


    public function department()
    {
        return $this->hasOne(Department::class,'id','department_id');
    }

}

