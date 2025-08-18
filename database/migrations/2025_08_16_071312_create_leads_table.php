<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id('leadID');
            $table->integer('customerID')->nullable();
            $table->integer('userID')->nullable();
            $table->string('purpose', 100)->nullable();
            $table->decimal('loanRequired', 15, 2)->nullable();
            $table->integer('tenure')->nullable();
            $table->decimal('monthlyIncome', 15, 2)->nullable();
            $table->string('salaryMode', 50)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('pincode', 20)->nullable();
            $table->string('status', 50)->nullable();
            $table->string('utmSource', 100)->nullable();
            $table->string('fbLeads', 50)->nullable();
            $table->string('domainName', 100)->nullable();
            $table->dateTime('comingLeadsDate')->nullable();
            $table->string('ip', 50)->nullable();
            $table->integer('callAssign')->nullable();
            $table->integer('creditAssign')->nullable();
            $table->dateTime('createdDate')->nullable();
            $table->string('alloUID', 50)->nullable();
            $table->string('sanctionalloUID', 50)->nullable();
            $table->string('sanctionAppID', 50)->nullable();
            $table->string('entity_id', 50)->nullable();
            $table->dateTime('ekyc_request_initiated_on')->nullable();
            $table->dateTime('ekyc_request_closed_on')->nullable();
            $table->string('ekyc_request_status', 50)->nullable();
            $table->boolean('uploaddocument')->default(0);
            $table->boolean('form_tnc')->default(0);
            $table->string('product', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
