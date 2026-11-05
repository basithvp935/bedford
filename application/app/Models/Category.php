<?php



namespace App\Models;



use Illuminate\Database\Eloquent\Model;



class Category extends Model

{

    protected $table = "categories";
    protected $guarded = [];

    public function produces()
    {
        return $this->hasMany(Produce::class, 'category_id', 'id');
    }

}

