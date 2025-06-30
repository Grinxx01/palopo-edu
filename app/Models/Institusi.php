<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EducationLevel;

class Institusi extends Model
{
    protected $fillable = [
        'nama_sekolah',
        'tingkat_pendidikan',
        'alamat',
        'deskripsi',
        'url_website',
        'gambar',
    ];

    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class, 'education_level_id');
    }
}
