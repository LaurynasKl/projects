<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'account',
        'client_code',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
