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
        Schema::create('ivrstatus', function (Blueprint $table) {
            $table->id(); // id (primary key, auto increment)
            $table->string('ivrstageName')->nullable(); // ivrstageName
            $table->string('ivrurl')->nullable();       // ivrurl
            $table->string('type')->nullable();         // type
            $table->string('iconCode')->nullable();     // iconCode
            $table->tinyInteger('status')->default(1);  // status (1=active, 0=inactive)
            $table->dateTime('credatedDate')->nullable(); // creadtedDate
            $table->integer('squence')->default(0);     // squence (ordering)
            
            $table->timestamps(); // created_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ivrstatus');
    }
};
