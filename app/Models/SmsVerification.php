<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsVerification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'code',
        'expired_at'
    ];

    protected $hidden = [
        'phone',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
