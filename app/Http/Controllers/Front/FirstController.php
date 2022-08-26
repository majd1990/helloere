<?php

namespace App\Http\Controllers\Front;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;


class FirstController extends Controller
{
    //
    public function _construct()
    {
        $this->middleware('auth');
    }
    
    public function showmyname()
    {
        return 'this is my new controller';
    }
    public function showmyname1()
    {
        return 'this is my new controller1';
    }
    public function showmyname2()
    {
        return 'this is my new controller2';
    }
}
