<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityEducationVideo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quality_education_videos';

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
    protected $guarded = ['id'];


}
