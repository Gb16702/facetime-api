<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestedInRelation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'relation_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function relation()
    {
        return $this->belongsTo(Relationship::class, 'relation_id');
    }
}
