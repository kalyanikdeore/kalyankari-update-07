<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
 protected $fillable = [
        //students
        "student_fullname",
        "student_dob",
        "student_gender",
        "student_email",
        "student_mobile",
        "student_aadhar",
        "student_country",
        "student_state",
        "student_city",
        "student_address",
        "student_zip",
        "student_photo",
        "student_sign",
        "student_aadhar_card",
        // parents 
        "parent_fullname",
        "parent_mobile",
        "parent_country",
        "parent_state",
        "parent_city",
        "parent_address",
        "parent_zip",
        "parent_source_income",
        "parent_income",
        "parent_income_cert",
        // ssc 
        "is_ssc",
        "obtain_mark_ssc",
        "total_mark_ssc",
        "percentage_ssc",
        "current_std_below_ssc",
        "specify_medium_below_ssc",
        "current_fee_structure_below_ssc",
        //hsc or diploma
        "is_hsc",
        "obtain_mark_hsc",
        "total_mark_hsc",
        "percentage_hsc",
        "current_std_hsc_course",
        "specify_hsc_course_name",
        'current_hsc_term',
        "current_hsc_term_fee_structure",
        //graduation
        "is_graduate",
        "obtain_mark_graduate",
        "total_mark_graduate",
        "percentage_graduate",
        "graduate_course",
        "specify_field_subject_graduate",
        "current_year_graduate",
        "current_fee_structure_below_graduate",
        //post_graduation
        "is_post_graduate",
        "obtain_mark_post_graduate",
        "total_mark_post_graduate",
        "percentage_post_graduate",
        "post_graduate_course",
        "specify_field_subject_post_graduate",
        "current_year_post_graduate",
        "current_fee_structure_below_post_graduate",
        //other_details
        "dignitary_recommendation",
        "community_recommendation",
        "family_benefit_status",
        "family_benefit_name",
        "have_benefit_before_status",
        "specify_have_benefit_yr",
        //upload_documents
        "previous_yr_cert",
        "ssc_cert",
        "hsc_cert",
        "graduate_cert",
        "recommendation_cert",
        "college_cert_with_fee_structure",
        "other_docs_cert",
        //declaration
        "loan_amt_need",
        "consent",
        "declaration",
    ];
}
