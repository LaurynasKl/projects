<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'account',
    ];

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }
}
