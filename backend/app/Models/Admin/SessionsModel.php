<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionsModel extends Model
{
    use HasFactory;

    protected $table = 'sessions';

    protected $fillable = [
        'mail',
        'token'
    ];

    

}
