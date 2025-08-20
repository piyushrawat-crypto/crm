<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ivrstatus extends Model
{
    use HasFactory;

    // If your table name is NOT pluralized automatically
    protected $table = 'ivrstatus';  // or 'ivr_status' (adjust to your DB table)

    // Primary key (if not 'id')
    protected $primaryKey = 'id';

    // Allow mass assignment
    protected $fillable = [
        'type',
        'ivrstageName',
        'ivrurl',
        'status',
        'created_at',
        'updated_at'
    ];

    // Enable/disable timestamps (true = expect created_at & updated_at)
    public $timestamps = true;
}
