<?php

namespace App\Http\Controllers;
use App\Models\myObject as myobj;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class FirstController2 extends BaseController
{
    //
    public function getindex($data,$ag){
        
        $obg=['Name'=>"majd emran",'Id'=>5,'Gender'=>'male'];
   
        return view ('welcome');
    }
}
