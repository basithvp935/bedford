<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QualityEducation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'quality_educations';

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

    public function images()
    {
        return $this->hasMany(QualityEducationImage::class, 'quality_education_id', 'id');
    }

    public function videos()
    {
        return $this->hasMany(QualityEducationVideo::class, 'quality_education_id', 'id');
    }



}
