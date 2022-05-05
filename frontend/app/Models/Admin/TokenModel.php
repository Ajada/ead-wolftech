<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TokenModel extends Model
{
    use HasFactory;

    protected $table = '_tokens';

    protected $fillable = [
        'function',
        'token',
    ];
}
