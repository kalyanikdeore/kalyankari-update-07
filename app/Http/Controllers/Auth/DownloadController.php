<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use Carbon\Carbon;

class DownloadController extends Controller
{
    //
    public function download(Application $record)
    {
        // dd($record);
        $students = new Buyer([
            "student_fullname" => $record->student_fullname,
"student_dob" => $record->student_dob,
"student_gender" => $record->student_gender,
"student_email" => $record->student_email,
"student_mobile" => $record->student_mobile,
"student_aadhar" => $record->student_aadhar,
"student_country" => $record->student_country,
"student_state" => $record->student_state,
"student_city" => $record->student_city,
"student_address" => $record->student_address,
"student_zip" => $record->student_zip,
"student_photo" => $record->student_photo,
"student_sign" => $record->student_sign,
"student_aadhar_card" => $record->student_aadhar_card,
// parents
"parent_fullname" => $record->parent_fullname,
"parent_mobile" => $record->parent_mobile,
"parent_country" => $record->parent_country,
"parent_state" => $record->parent_state,
"parent_city" => $record->parent_city,
"parent_address" => $record->parent_address,
"parent_zip" => $record->parent_zip,
"parent_source_income" => $record->parent_source_income,
"parent_income" => $record->parent_income,
"parent_income_cert" => $record->parent_income_cert,
// ssc
"is_ssc" => $record->is_ssc,
"obtain_mark_ssc" => $record->obtain_mark_ssc,
"total_mark_ssc" => $record->total_mark_ssc,
"percentage_ssc" => $record->percentage_ssc,
"current_std_below_ssc" => $record->current_std_below_ssc,
"specify_medium_below_ssc" => $record->specify_medium_below_ssc,
"current_fee_structure_below_ssc" => $record->current_fee_structure_below_ssc,
// hsc or diploma
"is_hsc" => $record->is_hsc,
"obtain_mark_hsc" => $record->obtain_mark_hsc,
"total_mark_hsc" => $record->total_mark_hsc,
"percentage_hsc" => $record->percentage_hsc,
"current_std_hsc_course" => $record->current_std_hsc_course,
"specify_hsc_course_name" => $record->specify_hsc_course_name,
"current_hsc_term" => $record->current_hsc_term,
"current_hsc_term_fee_structure" => $record->current_hsc_term_fee_structure,
// graduation
"is_graduate" => $record->is_graduate,
"obtain_mark_graduate" => $record->obtain_mark_graduate,
"total_mark_graduate" => $record->total_mark_graduate,
"percentage_graduate" => $record->percentage_graduate,
"graduate_course" => $record->graduate_course,
"specify_field_subject_graduate" => $record->specify_field_subject_graduate,
"current_year_graduate" => $record->current_year_graduate,
"current_fee_structure_below_graduate" => $record->current_fee_structure_below_graduate,
// post graduation
"is_post_graduate" => $record->is_post_graduate,
"obtain_mark_post_graduate" => $record->obtain_mark_post_graduate,
"total_mark_post_graduate" => $record->total_mark_post_graduate,
"percentage_post_graduate" => $record->percentage_post_graduate,
"post_graduate_course" => $record->post_graduate_course,
"specify_field_subject_post_graduate" => $record->specify_field_subject_post_graduate,
"current_year_post_graduate" => $record->current_year_post_graduate,
"current_fee_structure_below_post_graduate" => $record->current_fee_structure_below_post_graduate,
// other details
"dignitary_recommendation" => $record->dignitary_recommendation,
"community_recommendation" => $record->community_recommendation,
"family_benefit_status" => $record->family_benefit_status,
"family_benefit_name" => $record->family_benefit_name,
"have_benefit_before_status" => $record->have_benefit_before_status,
"specify_have_benefit_yr" => $record->specify_have_benefit_yr,
// upload documents
"previous_yr_cert" => $record->previous_yr_cert,
"ssc_cert" => $record->ssc_cert,
"hsc_cert" => $record->hsc_cert,
"graduate_cert" => $record->graduate_cert,
"recommendation_cert" => $record->recommendation_cert,
"college_cert_with_fee_structure" => $record->college_cert_with_fee_structure,
"other_docs_cert" => $record->other_docs_cert,
// declaration
"loan_amt_need" => $record->loan_amt_need,
"consent" => $record->consent,
"declaration" => $record->declaration,
"submitted_date"=>Carbon::parse($record->created_at)->format('d/m/Y'),

            'custom_fields' => [
                'email' => 'test@example.com',
            ],
        ]);

        $item = InvoiceItem::make('Service 1')->pricePerUnit(2);

        $invoice = Invoice::make()
            ->buyer($students)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item)
            ->logo(public_path('assets/images/applications.png'));
  

        return $invoice->stream();


    }
}
