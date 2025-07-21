<?php

namespace App\Livewire;

use App\Models\Application as ModelsApplication;
use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

use Livewire\Component;

class Application extends Component
{

    use WithFileUploads;
    //-------------------------------------------- student basic details 

    #[Validate('required', message: 'Please provide first-name')]
    #[Validate('min:3', message: 'This name is too short')]
    #[Validate('max:50', message: 'This name is too long')]
    public $student_firstname;

    #[Validate('required', message: 'Please provide middle-name')]
    #[Validate('min:3', message: 'This name is too short')]
    #[Validate('max:50', message: 'This name is too long')]
    public $student_middlename;

    #[Validate('required', message: 'Please provide last-name')]
    #[Validate('min:3', message: 'This name is too short')]
    #[Validate('max:50', message: 'This name is too long')]
    public $student_lastname;



    #[Validate('required', message: 'Please provide mobile number')]
    #[Validate('digits:10', message: 'Please provide valid mobile number')]
    #[Validate('regex:/^[6-9]\d{9}$/i', message: 'Please provide valid mobile number')]
    public $student_mobile;


    #[Validate('required', message: 'Please provide address')]
    public $student_address;

    #[Validate('required', message: 'Please provide pincode number')]
    #[Validate('digits:6', message: 'Please provide valid pincode number')]
    public $student_zip;



    #[Validate('required|in:male,female,transgender', message: 'Please provide gender')]
    public $gender;

    #[Validate('required', message: 'Please provide date of birth')]
    public $dob;

    #[Validate('required', message: 'Please provide email')]
    #[Validate('email', message: 'Please provide valid email')]
    #[Validate('email:rfc,dns', message: 'Please provide valid email')]
    public $email;

    #[Validate('required', message: 'Please provide aadhar number')]
    #[Validate('digits:12   ', message: 'Please provide valid aadhar number')]

    public $aadhar;

    #[Validate('required', message: 'Please provide country')]
    public $countryId;

    #[Validate('required', message: 'Please provide state')]
    public $stateId;

    #[Validate('required', message: 'Please provide city')]
    public $cityId;

    //----------------------- parent section start--------------------- 


    #[Validate('required', message: 'Please provide first-name')]
    #[Validate('min:3', message: 'This name is too short')]
    #[Validate('max:50', message: 'This name is too long')]
    public $parent_firstname;

    #[Validate('required', message: 'Please provide middle-name')]
    #[Validate('min:3', message: 'This name is too short')]
    #[Validate('max:50', message: 'This name is too long')]
    public $parent_middlename;

    #[Validate('required', message: 'Please provide last-name')]
    #[Validate('min:3', message: 'This name is too short')]
    #[Validate('max:50', message: 'This name is too long')]
    public $parent_lastname;

    #[Validate('required', message: 'Please provide mobile number')]
    #[Validate('digits:10', message: 'Please provide valid mobile number')]
    #[Validate('regex:/^[6-9]\d{9}$/i', message: 'Please provide valid mobile number')]
    public $parent_mobile;


    #[Validate('required', message: 'Please provide country')]
    public $countryId_guardian;

    #[Validate('required', message: 'Please provide state')]
    public $stateId_guardian;

    #[Validate('required', message: 'Please provide city')]
    public $cityId_guardian;

    #[Validate('required', message: 'Please provide address')]
    public $parent_address;

    #[Validate('required', message: 'Please provide pincode number')]
    #[Validate('digits:6', message: 'Please provide valid pincode number')]
    public $parent_zip;

    #[Validate('required', message: 'Please provide income')]
    public $income;

    #[Validate('required', message: 'Please provide source of income')]
    public $source_income;

    //-------------------- Education Section Start------------------------

    public $ssc;
    public $hsc;
    public $graduate;
    public $post_graduate;

    public $current_std_below_ssc;
    public $specify_medium_ssc;
    public $current_std_fee_structure_below_ssc;



    public $current_std_hsc_course;
    public $specify_hsc_course_name;
    public $current_hsc_term;
    public $current_hsc_term_fee_structure;


    public $graduation_stream;

    public $specify_graduate_field_subject;
    public $current_graduate_term;
    public $current_graduate_term_fee_structure;



    public $post_graduation_stream;

    public $specify_post_graduate_field_subject;
    public $current_post_graduate_term;
    public $current_post_graduate_term_fee_structure;






    public $total_mark_ssc;

    public $obtain_mark_ssc;

    public $total_mark_hsc;

    public $obtain_mark_hsc;


    public $total_mark_graduate;

    public $obtain_mark_graduate;

    public $is_address_same = 'no';

    public $maxSize = 2048; // 2 MB max size
    public $allowedTypes = ['pdf'];



    public $is_ssc = 'no';
    public $is_hsc = 'no';
    public $is_graduate = 'no';
    public $is_post_graduate = 'no';



    // other details -------------------------------------------------

    #[Validate('required', message: 'Please provide right choice')]
    public $benefited_scheme;

    public $benefited_scheme_name;




    #[Validate('required', message: 'Please provide right choice')]
    public $is_family_benefit;

    public $family_benefit_name;

    #[Validate('required', message: 'Please provide dignitaries recommendation')]
    public $dignitaries_recommendation;

    #[Validate('required', message: 'Please provide community recommendation')]
    public $community_recommendation;



    // upload images  start

    #[Validate('required', message: 'Please provide applicant photo')]
    #[Validate('image', message: " Please provide valid image.")]
    #[Validate('max:1024', message: " Please provide valid size of image.")]
    public $photo;

    #[Validate('required', message: 'Please provide applicant sign')]
    #[Validate('image', message: " Please provide valid image.")]
    #[Validate('max:1024', message: " Please provide valid size of image.")]
    public $sign;



    #[Validate('required', message: 'Please provide adhar card')]
    #[Validate('file', message: 'Please provide valid document file')]
    #[Validate('max:2048', message: 'Please provide valid size of document file')]
    #[Validate('mimes:pdf', message: 'Please provide valid pdf document file')]
    public $adhar_card;



    #[Validate('required', message: 'Please provide income certificate')]
    #[Validate('file', message: 'Please provide valid document file')]
    #[Validate('max:2048', message: 'Please provide valid size of document file')]
    #[Validate('mimes:pdf', message: 'Please provide valid pdf document file')]
    public $income_cert;

    #[Validate('required', message: 'Please provide previous year marksheet')]
    #[Validate('file', message: 'Please provide valid document file')]
    #[Validate('max:2048', message: 'Please provide valid size of document file')]
    #[Validate('mimes:pdf', message: 'Please provide valid pdf document file')]
    public $prev_yr_marksheet;


    #[Validate('required', message: 'Please provide community certificate')]
    #[Validate('file', message: 'Please provide valid document file')]
    #[Validate('max:2048', message: 'Please provide valid size of document file')]
    #[Validate('mimes:pdf', message: 'Please provide valid pdf document file')]
    public $community_cert;

    public $supporting_docs;

    #[Validate('required', message: 'Please provide institute certificate')]
    #[Validate('file', message: 'Please provide valid document file')]
    #[Validate('max:2048', message: 'Please provide valid size of document file')]
    #[Validate('mimes:pdf', message: 'Please provide valid pdf document file')]
    public $institute_cert;

    public $ssc_cert;
    public $hsc_cert;
    public $graduate_cert;

    public $post_graduate_cert;


    // declaration here

    #[Validate('required', message: 'Please allow our terms and conditions')]
    public $declaration;

    #[Validate('required', message: 'Please allow our terms and conditions')]
    public $consent;

    #[Validate('required', message: 'Please Speciy loan amount')]
    public $loan_amt_need;












    public function render()
    {
        return view('livewire.application');
    }

    #[Computed()]
    public function countries()
    {
        return Country::all();
    }

    #[Computed()]
    public function states()
    {
        return State::where('country_id', $this->countryId)->get();
    }

    #[Computed()]
    public function cities()
    {

        return City::where('state_id', ($this->stateId <= 17) ? $this->stateId : $this->stateId + 1)->get();
    }

    #[Computed()]
    public function ssc_percentage()
    {

        if ($this->obtain_mark_ssc && $this->total_mark_ssc) {
            return number_format($this->get_percentage($this->obtain_mark_ssc, $this->total_mark_ssc), 2);
        }

        return 0;

    }

    #[Computed()]
    public function hsc_percentage()
    {

        if ($this->obtain_mark_hsc && $this->total_mark_hsc) {
            return number_format($this->get_percentage($this->obtain_mark_hsc, $this->total_mark_hsc), 2);
        }

        return 0;

    }


    #[Computed()]
    public function graduate_percentage()
    {

        if ($this->obtain_mark_graduate && $this->total_mark_graduate) {
            return number_format($this->get_percentage($this->obtain_mark_graduate, $this->total_mark_graduate), 2);
        }

        return 0;

    }

    public function updated($property)
    {
        if ($property === 'is_address_same') {

            if ($this->is_address_same) {

                $this->countryId_guardian = $this->countryId;
                $this->stateId_guardian = $this->stateId;
                $this->cityId_guardian = $this->cityId;
                $this->parent_address = $this->student_address;
                $this->parent_zip = $this->student_zip;


            }
        }

        if ($property === 'benefited_scheme') {
            if ($this->benefited_scheme === 'no') {
                $this->benefited_scheme_name = '';
            }

        }

        if ($property === 'is_family_benefit') {
            if ($this->is_family_benefit === 'no') {
                $this->family_benefit_name = '';
            }

        }



    }




    //-------------------------------- form save here------------------------
    public function save()
    {

        if ($this->validate()) {


            //


            $student_details = [
                //students
                "student_fullname" => $this->fullname($this->student_firstname, $this->student_middlename, $this->student_lastname) ?? 'not specify',
                "student_dob" => $this->dob ?? 'not specify',
                "student_gender" => $this->gender ?? 'not specify',
                "student_email" => $this->email ?? 'not specify',
                "student_mobile" => $this->student_mobile ?? 'not specify',
                "student_aadhar" => $this->aadhar ?? 'not specify',
                "student_country" => $this->getSpecific('countries', 'id', $this->countryId) ?? 'not specify',
                "student_state" => $this->getSpecific('states', 'id', $this->stateId) ?? 'not specify',
                "student_city" => $this->getSpecific('cities', 'id', $this->cityId) ?? 'not specify',
                "student_address" => $this->student_address ?? 'not specify',
                "student_zip" => $this->student_zip ?? 'not specify',
                "student_photo" => $this->photo ? $this->photo->store('photos', 'public') : "not specify",
                "student_sign" => $this->sign ? $this->sign->store('signs', 'public') : "not specify",
                "student_aadhar_card" => $this->adhar_card ? $this->adhar_card->store('aadhar', 'public') : "not specify",
                // parents 
                "parent_fullname" => $this->fullname($this->parent_firstname, $this->parent_middlename, $this->parent_lastname) ?? 'not specify',
                "parent_mobile" => $this->student_mobile ?? 'not specify',
                "parent_country" => $this->getSpecific('countries', 'id', $this->countryId_guardian) ?? 'not specify',
                "parent_state" => $this->getSpecific('states', 'id', $this->stateId_guardian) ?? 'not specify',
                "parent_city" => $this->getSpecific('cities', 'id', $this->cityId_guardian) ?? 'not specify',
                "parent_address" => $this->parent_address ?? 'not specify',
                "parent_zip" => $this->student_zip ?? 'not specify',
                "parent_source_income" => $this->source_income ?? 'not specify',
                "parent_income" => $this->income ?? 'not specify',
                "parent_income_cert" => $this->income_cert ? $this->income_cert->store('incomeCertificate', 'public') : "not specify",
                // ssc 
                "is_ssc" => ($this->is_ssc === 'yes') ? true : false,
                "obtain_mark_ssc" => $this->obtain_mark_ssc ?? 'not specify',
                "total_mark_ssc" => $this->total_mark_ssc ?? 'not specify',
                "percentage_ssc" => $this->ssc_percentage ?? 'not specify',
                "current_std_below_ssc" => $this->current_std_below_ssc ?? 'not specify',
                "specify_medium_below_ssc" => $this->specify_medium_ssc ?? 'not specify',
                "current_fee_structure_below_ssc" => $this->current_std_fee_structure_below_ssc ?? 'not specify',
                //hsc or diploma
                "is_hsc" => ($this->is_hsc === 'yes') ? true : false,
                "obtain_mark_hsc" => $this->obtain_mark_hsc ?? 'not specify',
                "total_mark_hsc" => $this->total_mark_hsc ?? 'not specify',
                "percentage_hsc" => $this->hsc_percentage ?? 'not specify',
                "current_std_hsc_course" => $this->current_std_hsc_course ?? 'not specify',
                "specify_hsc_course_name" => $this->specify_hsc_course_name ?? 'not specify',
                "current_hsc_term" => $this->current_hsc_term ?? 'not specify',
                "current_hsc_term_fee_structure" => $this->current_hsc_term_fee_structure ?? 'not specify',
                //graduation
                "is_graduate" => ($this->is_graduate === 'yes') ? true : false,
                "obtain_mark_graduate" => $this->obtain_mark_graduate ?? 'not specify',
                "total_mark_graduate" => $this->total_mark_graduate ?? 'not specify',
                "percentage_graduate" => $this->graduate_percentage ?? 'not specify',
                "graduate_course" => $this->graduation_stream ?? 'not specify',
                "specify_field_subject_graduate" => $this->specify_graduate_field_subject ?? 'not specify',
                "current_year_graduate" => $this->current_graduate_term ?? 'not specify',
                "current_fee_structure_below_graduate" => $this->current_graduate_term_fee_structure ?? 'not specify',
                //post_graduation
                "is_post_graduate" => ($this->is_post_graduate === 'yes') ? true : false,
                "obtain_mark_post_graduate" => $this->obtain_mark_post_graduate ?? 'not specify',
                "total_mark_post_graduate" => $this->total_mark_post_graduate ?? 'not specify',
                "percentage_post_graduate" => $this->post_graduate_percentage ?? 'not specify',
                "post_graduate_course" => $this->post_graduation_stream ?? 'not specify',
                "specify_field_subject_post_graduate" => $this->specify_post_graduate_field_subject ?? 'not specify',
                "current_year_post_graduate" => $this->current_post_graduate_term ?? 'not specify',
                "current_fee_structure_below_post_graduate" => $this->current_post_graduate_term_fee_structure ?? 'not specify',
                //other_details
                "dignitary_recommendation" => ($this->dignitaries_recommendation === 'yes') ? true : false,
                "community_recommendation" => ($this->community_recommendation === 'yes') ? true : false,
                "family_benefit_status" => ($this->is_family_benefit === 'yes') ? true : false,
                "family_benefit_name" => $this->family_benefit_name ?? 'not specify',
                "have_benefit_before_status" => ($this->benefited_scheme === 'yes') ? true : false,
                "specify_have_benefit_yr" => $this->benefited_scheme_name ?? 'not specify',
                //upload_documents
                "previous_yr_cert" => $this->prev_yr_marksheet ? $this->prev_yr_marksheet->store('preYrCertificates', 'public') : "not specify",
                "ssc_cert" => $this->ssc_cert ? $this->ssc_cert->store('sscCertificates', 'public') : "not specify",
                "hsc_cert" => $this->hsc_cert ? $this->hsc_cert->store('hscCertificates', 'public') : "not specify",
                "graduate_cert" => $this->graduate_cert ? $this->graduate_cert->store('graduateCertificates', 'public') : "not specify",
                "recommendation_cert" => $this->community_cert ? $this->community_cert->store('recommendationCertificates', 'public') : "not specify",
                "college_cert_with_fee_structure" => $this->institute_cert ? $this->institute_cert->store('instituteCertificates', 'public') : "not specify",
                "other_docs_cert" => $this->supporting_docs ? $this->supporting_docs->store('supportingCert', 'public') : "not specify",
                //declaration
                "loan_amt_need" => $this->loan_amt_need ?? 'not specify',
                "consent" => $this->consent ?? false,
                "declaration" => $this->declaration ?? false,
            ];

            if (ModelsApplication::create($student_details)) {
                session()->flash('application_status', 'Application submitted successfully!');
                return redirect()->route('thanks', ["message" => "success"]);
            } else {
                session()->flash('application_status', 'Application submitted successfully!');
                return redirect()->route('thanks', ["message" => "error"]);
            }






        }

    }




    //----------------------------- private function start ----------------------
    private function get_percentage($marks, $total)
    {
        return ($marks / $total) * 100;
    }


    //this is for city name,state,country

    private function fullname($f, $m, $l)
    {
        if ($f && $m && $l) {
            return $f . " " . $m . " " . $l;
        }
        return 0;
    }

    private function getSpecific($table_name, $search_param, $id)
    {
        $name = DB::table($table_name)->where($search_param, $id)->value('name');
        return $name ?? 0;
    }



}
