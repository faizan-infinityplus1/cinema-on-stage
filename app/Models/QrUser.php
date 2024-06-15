<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'state',
        'city',
        'created_at'
    ];
}
