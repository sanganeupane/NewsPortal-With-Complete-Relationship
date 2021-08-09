<?php

namespace App\General;



use Illuminate\Support\Facades\Config;

trait General{

    public  $data=[];


    public function data($key, $value = '')
    {
       return $this->data[$key] = $value;

    }
    public function  makeTitle($backendPart,$separator=": :",$frontendPart=null)
    {
        if(!isset($frontendPart)){
            $frontendPart=Config::get('title.company_name');
        }

        return $frontendPart.$separator.ucfirst($backendPart);

    }

}
