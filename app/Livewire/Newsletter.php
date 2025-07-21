<?php

namespace App\Livewire;

use App\Models\Enquiry;
use Livewire\Component;
use Livewire\Attributes\Validate;

class Newsletter extends Component
{

    #[Validate('required', message: 'Please provide email')]
    #[Validate('email', message: 'Please provide valid email')]
    #[Validate('email:rfc,dns', message: 'Please provide valid email')]
    public $email;

    public function render()
    {
        return view('livewire.newsletter');
    }

    public function save(){
        if($this->validate()){
            $user_details = new Enquiry();
          
            $user_details->email = $this->email;
            $user_details->purpose = 'Newsletter';

            
            if ($user_details->save()) {
                $this->reset(['email']);
                return redirect()->back()->with('contactSuccess', 'Thank you for contacting us.');
            } else {
                $this->reset(['email']);
                return redirect()->back()->with('contactError', 'There is problem in contacting us.');
            }
        
        }
    }
}
