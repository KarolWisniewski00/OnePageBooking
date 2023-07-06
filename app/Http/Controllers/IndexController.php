<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends ScraperController
{
    public function index(){
        $opinions = $this->getBookingOpinion();
        $opinions_beige = $this->getBookingOpinion('https://www.booking.com/Pulse-tpR9h6');
        return view('index',[
            'opinions'=>$opinions,
            'opinions_beige'=>$opinions_beige
        ]);
    }
    public function rules(){
        return view('rules');
    }
}
