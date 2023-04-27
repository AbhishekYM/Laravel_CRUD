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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('name');
            $table->string('city');
            $table->bigInteger('marks');
            $table->string('email')->nullable();
            $table->string('address')->nullable();   
            $table->date('DOB')->nullable();         
            $table->string('gender')->nullable();
            $table->string('subject')->nullable();
            $table->string('state')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
        // Schema::table('students',function(Blueprint $table)
        // {
        //     $table->dropsSoftDeletes();
        // });

    }
};
