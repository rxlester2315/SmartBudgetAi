<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    



    public function landingpage(){
        return view('main-page.landing_page');
    }

    


}