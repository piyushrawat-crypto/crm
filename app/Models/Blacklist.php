<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    use HasFactory;

    // Define the table name if it’s not the plural of the model
    protected $table = 'blacklistcustomer';

    // Allow mass assignment for these fields
    protected $fillable = [
        'pan',
        'email',
        'mobile',
        'remark',
        'created_date',
    ];

    // If you don’t want timestamps (created_at, updated_at)
    public $timestamps = false;
}
