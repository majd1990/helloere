<?php

namespace App\Http\Controllers;
use App\Models\myObject as myobj;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LandingController extends BaseController
{
    //
    public function getLanding(){
        return view ('landing');
    }
}
