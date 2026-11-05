<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MissionVision extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'mission_visions';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['banner', 'heading1', 'description1', 'heading2', 'description2'];

    
}
