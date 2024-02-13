<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Action;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'code',
    ];
}
