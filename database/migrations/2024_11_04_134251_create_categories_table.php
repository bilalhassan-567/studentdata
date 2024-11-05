<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDataTable extends Migration

{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('studentdata', function (Blueprint $table) {
            $table->id();
            $table->string('student_name'); // Name of the student
            $table->string('student_email')->unique(); // Email of the student
            $table->date('date_of_birth'); // Date of birth
            $table->string('gender'); // Gender of the student
            $table->string('enrollment_number')->unique(); // Unique enrollment number
            $table->string('course'); // Course the student is enrolled in
            $table->date('enrollment_date'); // Date of enrollme
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentdata');
    }
};
