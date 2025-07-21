<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class breadscrumb extends Component
{
    /**
     * Create a new component instance.
     */

     public $pageName;
    public function __construct($pageName)
    {
        $this->pageName = $pageName;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadscrumb');
    }

    // public function getTitle($value)
    // {

    //     $pages = ['about','contact','gallery','cause','donation','terms','eligibility','all_stories','stories','blog','beneficiary_student','application','donate'];
    //     $index = array_search($value, $pages);

    //     if ($index !== false) {
    //         switch ($value) {
    //             case "about":
    //                 return "About Us";

    //             case "contact":
    //                 return "Contact";

    //             case "gallery":
    //                 return "Gallery";

    //                 case "blog":
    //                     return "Blog";

    //                     case "donation":
    //                         return "Donation";

    //                 case "cause":
    //                     return "Causes";
    

    //             case "terms":
    //                 return "Terms";

    //                 case "eligibility":
    //                     return "Eligibility";
                        
    //                 case "all_stories":
    //                     return "Stories";

    //             case "stories":
    //                 return "Stories";

    //             case "beneficiary_student":
    //                 return "Beneficiary Students";

                          
    //                 case "application":
    //                     return "Application";

                              
    //                 case "donate":
    //                     return "Donate";

    //             default:
    //                 return "Unknown Page";

    //         }
    //     }

    //     return "No Page Found";







    // }
}
