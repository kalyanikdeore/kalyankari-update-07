<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Enquiry;
use Livewire\Attributes\Validate;

class Contact extends Component
{

    #[Validate('required', message: 'Please provide name')]
    public $fullname;


    #[Validate('required', message: 'Please provide email')]
    #[Validate('email', message: 'Please provide valid email')]
    #[Validate('email:rfc,dns', message: 'Please provide valid email')]
    public $email;


    public $body;
    public function render()
    {
        return view('livewire.contact');
    }

    public function save(){
        if($this->validate()){

        // $user_details = [
        //     "fullname"=>$this->fullname,
        //     "email"=>$this->email,
        //     'message'=>$this->body
        // ];


        $user_details = new Enquiry();
        $user_details->name = $this->fullname;
        $user_details->email = $this->email;
        $user_details->purpose = 'Contact Enquiry';
        $user_details->message = $this->body;


        if ($user_details->save()) {
            $this->reset(['fullname', 'email', 'body']);
            return redirect()->back()->with('contactSuccess', 'Thank you for contacting us.');
        } else {
            $this->reset(['fullname', 'email', 'body']);
            return redirect()->back()->with('contactError', 'There is problem in contacting us.');
        }

       
        }
    }
}
