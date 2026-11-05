<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityEducationImage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quality_education_images';

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
