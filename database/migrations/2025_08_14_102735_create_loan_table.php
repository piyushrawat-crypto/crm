<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('loan', function (Blueprint $table) {
            $table->id('loanID');
            $table->integer('leadID');
            $table->string('loanNo', 50);
            $table->integer('customerID');
            $table->decimal('disbursalAmount', 15, 2);
            $table->date('disbursalDate');
            $table->time('disbursalTime');
            $table->string('disbursalReferenceNo', 50);
            $table->string('accountNo', 30);
            $table->string('accountType', 20);
            $table->string('bankIfsc', 20);
            $table->string('bank', 100);
            $table->string('bankBranch', 100);
            $table->string('chequeDetails', 255);
            $table->date('pdDate')->nullable();
            $table->string('pdDoneBy', 50)->nullable();
            $table->decimal('deduction', 15, 2)->nullable();
            $table->string('remarks', 255)->nullable();
            $table->string('status', 50);
            $table->string('rejReason', 255)->nullable();
            $table->string('companyAccountNo', 50);
            $table->string('ip', 50)->nullable();
            $table->string('disbursedBy', 50)->nullable();
            $table->dateTime('createdDate');
            $table->string('allocted_id', 50)->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan');
    }
};
