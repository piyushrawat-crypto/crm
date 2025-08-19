<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blacklistCustomer', function (Blueprint $table) {
            $table->id(); // ID (Primary Key, Auto Increment)
            $table->string('pan', 20)->unique(); // PAN number
            $table->string('email')->nullable(); // Email address
            $table->string('mobile', 15)->nullable(); // Mobile number
            $table->text('remark')->nullable(); // Reasons for blacklisting
            $table->timestamp('created_date')->useCurrent(); // Date (defaults to current timestamp)
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blacklists');
    }
};
