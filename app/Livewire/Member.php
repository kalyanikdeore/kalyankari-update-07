<?php

namespace App\Livewire;

use App\Models\Enquiry;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Member extends Component
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
    #[Validate('regex:/^[6-9]\d{9}$/i', message: 'Please provide valid mobile number')]
    public $mobile;


    public $details;

    



    public function render()
    {
        return view('livewire.member');
    }

    public function save(){
        if($this->validate()){



            $user_details = new Enquiry();
            $user_details->name = $this->firstName." ".$this->lastName;
            $user_details->email = $this->email;
            $user_details->phone = $this->mobile;
            $user_details->purpose = 'Member Request';
            $user_details->message = $this->details;
    
    
            if ($user_details->save()) {
                $this->reset(['firstName','lastName', 'email', 'details','mobile']);
                return redirect()->back()->with('contactSuccess', 'Thank you for contacting us.');
            } else {
                $this->reset(['firstName','lastName', 'email', 'details','mobile']);
                return redirect()->back()->with('contactError', 'There is problem in contacting us.');
            }
        }
    }
}
