<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportContext extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'translations'
    ];

    public function getTranslationsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setTranslationsAttribute($value)
    {
        $this->attributes['translations'] = json_encode($value);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
