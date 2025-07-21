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
        Schema::create('beneficiaries', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->text('student_address');
            $table->string('guardian_name');
            $table->string('guardian_mobile');
            $table->string('student_mobile');
            $table->string('course_name');
            $table->string('current_term');
            $table->text('college_name_address');
            $table->string('amt_per_annum');
            $table->string('financial_yr');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beneficiaries');
    }
};
