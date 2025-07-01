<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    protected $fillable = ['name', 'code'];

    public function institusis()
    {
        return $this->hasMany(Institusi::class, 'education_level_id');
    }

}
