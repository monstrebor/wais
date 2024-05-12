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
        Schema::create('associate_members', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->text('present_address');
            $table->integer('contact_number');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('valid_id_type');
            $table->integer('valid_id_number');
            $table->string('occupation');
            $table->integer('monthly_income');
            $table->string('civil_status');
            $table->string('spouse_name')->nullable();
            $table->integer('number_of_children')->nullable();
            $table->string('name_of_dependents');
            $table->date('birthday_of_dependents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('associate_members');
    }
};
