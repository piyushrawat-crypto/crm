<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    use HasFactory;

    // Define the table name if it’s not the plural of the model
    protected $table = 'blacklistcustomer';

    // Define the primary key if it’s not "id"
    protected $primaryKey = 'id';

    // Allow mass assignment for these fields
    protected $fillable = [
        'pan',
        'email',
        'mobile',
        'reasons',
        'date',
    ];

    // If you don’t want timestamps (created_at, updated_at)
    public $timestamps = false;
}
