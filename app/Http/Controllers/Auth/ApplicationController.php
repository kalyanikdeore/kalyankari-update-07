<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApplicationController extends Controller
{

    public $contacts;

 public function __construct() {
    $this->contacts=$this->getOneRecord('contacts','desc');
    }
    
    public function index(){
        return view('auth.application',['contacts'=>$this->contacts]);
    }


    public function getPage($message){

 
        if($message && session('application_status')){

           if($message=="success"|| $message=="error"){
          
            return view('auth.success',data: ["data"=>$message,'contacts'=>$this->contacts]);
           }
        }
        session()->forget('application_status');  
        session()->flush();
        return abort(403, 'You do not have permission to view this page.');

    }

    private function getOneRecord($tableName,$order){
        $data = DB::table($tableName)->where('isVisible',1)->orderBy('created_at',$order)->first();
        return $data;
       }
}
