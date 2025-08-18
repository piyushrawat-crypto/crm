<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'branch',
        'role',
        'status',
        'userName',
        'access',
        'createdDate',
    ];
}
