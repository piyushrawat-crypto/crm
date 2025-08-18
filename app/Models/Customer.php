<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Table name
    protected $table = 'customer';

    // Primary key (if your table uses `customerID` instead of `id`)
    protected $primaryKey = 'customerID';

    // If the table does NOT have created_at / updated_at
    public $timestamps = false;

    // Fillable fields (safe for mass-assignment)
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'pancard',
        'aadhar_no',
        'isVerified'
    ];
}
