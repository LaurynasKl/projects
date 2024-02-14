<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'account',
        'user_code',
        'eur',
    ];

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
