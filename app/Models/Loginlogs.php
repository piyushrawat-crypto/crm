<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loginlogs extends Model
{
    // ✅ Table name (if it doesn’t follow Laravel’s pluralization rule)
    protected $table = 'loginlogs';

    // ✅ Mass assignable fields
    protected $fillable = [
        'name',
        'ip',
        'email',
        'userID',
        'loginStart',
        'logoutEnd',
    ];

    // ✅ Optional: format date fields automatically
    protected $casts = [
        'loginStart' => 'datetime',
        'logoutEnd' => 'datetime',
    ];
}
