<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('customer', function (Blueprint $table) {
            $table->id('customerID');
            $table->string('name')->nullable();
            $table->string('firstName')->nullable();
            $table->string('middleName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('mobile', 20)->nullable();
            $table->string('email')->nullable();
            $table->string('pancard')->nullable();
            $table->string('aadharNo')->nullable();
            $table->string('password')->nullable();
            $table->string('marital')->nullable();
            $table->string('profile')->nullable();
            $table->string('otp')->nullable();
            $table->boolean('isVerified')->default(false);
            $table->string('employeeType')->nullable();
            $table->dateTime('createdDate')->nullable();
            $table->string('industry')->nullable();
            $table->string('designation')->nullable();
            $table->date('working_since')->nullable();
            $table->date('salary_date')->nullable();
            $table->string('official_email')->nullable();
            $table->string('education')->nullable();
            $table->boolean('emailVerify')->default(false);
            $table->boolean('panVerify')->default(false);
            $table->date('panVerifyDate')->nullable();
            $table->date('emailVerifyDate')->nullable();
            $table->string('gst_no')->nullable();
            $table->string('ekyc_request_status')->nullable();
            $table->string('alterMobileNo')->nullable();
            $table->string('geo_pincode')->nullable();
            $table->string('lat')->nullable();
            $table->string('longi')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
