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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('student_fullname');
            $table->string('student_dob');
            $table->string('student_gender');
            $table->string('student_email');
            $table->string('student_mobile');
            $table->string('student_aadhar')->unique();
            $table->string('student_country');
            $table->string('student_state');
            $table->string('student_city');
            $table->string('student_address');
            $table->string('student_zip');
            $table->string('student_photo');
            $table->string('student_sign');
            $table->string('student_aadhar_card');
            $table->string('parent_fullname');
            $table->string('parent_mobile');
            $table->string('parent_country');
            $table->string('parent_state');
            $table->string('parent_city');
            $table->string('parent_address');
            $table->string('parent_zip');
            $table->string('parent_source_income');
            $table->string('parent_income');
            $table->string('parent_income_cert');
            $table->boolean('is_ssc')->default(false);
            $table->string('obtain_mark_ssc');
            $table->string('total_mark_ssc');
            $table->string('percentage_ssc');
            $table->string('current_std_below_ssc');
            $table->string('specify_medium_below_ssc');
            $table->string('current_fee_structure_below_ssc');
            $table->boolean('is_hsc')->default(false);
            $table->string('obtain_mark_hsc');
            $table->string('total_mark_hsc');
            $table->string('percentage_hsc');
            $table->string('current_std_hsc_course');
            $table->string('specify_hsc_course_name');
            $table->string('current_hsc_term');
            $table->string('current_hsc_term_fee_structure');
            $table->boolean('is_graduate')->default(false);
            $table->string('obtain_mark_graduate');
            $table->string('total_mark_graduate');
            $table->string('percentage_graduate');
            $table->string('graduate_course');
            $table->string('specify_field_subject_graduate');
            $table->string('current_year_graduate');
            $table->string('current_fee_structure_below_graduate');
            $table->string('is_post_graduate')->default(false);
            $table->string('obtain_mark_post_graduate');
            $table->string('total_mark_post_graduate');
            $table->string('percentage_post_graduate');
            $table->string('post_graduate_course');
            $table->string('specify_field_subject_post_graduate');
            $table->string('current_year_post_graduate');
            $table->string('current_fee_structure_below_post_graduate');
            $table->boolean('dignitary_recommendation')->default(false);
            $table->boolean('community_recommendation')->default(false);
            $table->boolean('family_benefit_status')->default(false);
            $table->string('family_benefit_name');
            $table->boolean('have_benefit_before_status')->default(false);
            $table->string('specify_have_benefit_yr');
            $table->string('previous_yr_cert');
            $table->string('ssc_cert')->default(0);
            $table->string('hsc_cert')->default(0);
            $table->string('graduate_cert')->default(0);
            $table->string('recommendation_cert');
            $table->string('college_cert_with_fee_structure');
            $table->string('other_docs_cert')->default(0);
            $table->string('loan_amt_need');
            $table->string('consent');
            $table->string('declaration');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
