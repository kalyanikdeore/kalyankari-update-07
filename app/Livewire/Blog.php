<?php

namespace App\Livewire;

use Livewire\Component;

class Blog extends Component
{

    public $blogs;

    public $n = 0;
    public $blog_show;
    public $count;
    
       public function updateHiddenValue($id){
        $this->n = $this->count-$id;
     
    }

    public function mount($blogs){
        $this->count = count($this->blogs);
        $this->blog_show = $this->blogs[$this->n];
    }

    public function render()
    {
        return view('livewire.blog');
    }
}
