<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Donate extends Component
{


    #[Validate('required', message: 'Please provide first name')]
    public $firstName;

    #[Validate('required', message: 'Please provide last name')]
    public $lastName;

    #[Validate('required', message: 'Please provide email')]
    #[Validate('email', message: 'Please provide valid email')]
    #[Validate('email:rfc,dns', message: 'Please provide valid email')]
    public $email;

    #[Validate('required', message: 'Please provide mobile number')]
    #[Validate('digits:10', message: 'Please provide valid mobile number')]
    public $mobile;

    public $company;

    #[Validate('required', message: 'Please allow our terms and conditions')]
    public $terms;

#[Validate('required', message: 'Please provide PAN number')]
public $pan;


    #[Validate('required', message: 'Please provide donation amount')]
    public $donation_amt;



    #[Validate('required', message: 'Please select a payment method')]
    public $payment_method;

    #[Validate('required_if:payment_method,qr', message: 'Please upload QR Code')]
    #[Validate('image', message: 'Only image files are allowed')]
    #[Validate('max:1024', message: 'QR code image must be less than 1MB')]
    public $qr_code;

    #[Validate('required_if:payment_method,bank', message: 'Please enter account number')]
    public $account_number;

    #[Validate('required_if:payment_method,bank', message: 'Please enter branch name')]
    public $branch_name;

    public function render()
    {
        return view('livewire.donate');
    }

    public function save(){
        if($this->validate()){
   
        // Optional: Save the uploaded image if needed
        if ($this->qr_code) {
            $this->qr_code->store('qr-codes', 'public');
        }


            dd("Done");
        }
    }
}
