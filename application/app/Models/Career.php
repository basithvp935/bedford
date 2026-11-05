<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Model;



class Career extends Model

{

    protected $table = "tbl_careers";
    protected $guarded = [];

    public function career_applications()
    {
        return $this->hasMany(CareerApplication::class, 'career_id', 'id');
    }

}

