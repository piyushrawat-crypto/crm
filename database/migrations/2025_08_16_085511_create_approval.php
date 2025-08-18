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
        Schema::create('approval', function (Blueprint $table) {
            $table->approvalID(); // approvalID (auto increment primary key)

            $table->unsignedBigInteger('customerID')->nullable();
            $table->unsignedBigInteger('leadID')->nullable();

            $table->string('loanType')->nullable();
            $table->string('productType')->nullable();
            $table->string('branch')->nullable();

            $table->decimal('loanAmtApproved', 15, 2)->nullable();
            $table->integer('tenure')->nullable();
            $table->decimal('roi', 5, 2)->nullable(); // e.g. 12.50

            $table->date('repayDate')->nullable();

            $table->decimal('adminFee', 15, 2)->nullable();
            $table->decimal('plateFormFee', 15, 2)->nullable();
            $table->decimal('convinineceFee', 15, 2)->nullable();
            $table->decimal('creditRiskAnalisys', 15, 2)->nullable();
            $table->decimal('GstOfAdminFee', 15, 2)->nullable();

            $table->string('alternateMobile', 15)->nullable();
            $table->string('officialEmail')->nullable();
            $table->decimal('monthlyIncome', 15, 2)->nullable();

            $table->integer('cibil')->nullable();
            $table->integer('activeLoans')->default(0);
            $table->integer('activePL')->default(0);
            $table->integer('activeHL')->default(0);
            $table->integer('activeCC')->default(0);
            $table->integer('activePaydayLoan')->default(0);

            $table->decimal('outstandingAmount', 15, 2)->nullable();
            $table->decimal('monthlyObligation', 15, 2)->nullable();

            $table->string('status')->nullable();
            $table->string('formNo')->nullable();
            $table->string('employed')->nullable();
            $table->text('remark')->nullable();
            $table->string('loanRequirePurpose')->nullable();

            $table->unsignedBigInteger('creditedBy')->nullable();
            $table->string('rejectionReason')->nullable();
            $table->string('documentr')->nullable();
            $table->string('redFlag')->nullable();

            $table->dateTime('createdDate')->nullable();
            $table->unsignedBigInteger('sanctionalloUID')->nullable();

            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approval');
    }
};
