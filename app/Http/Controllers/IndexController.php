<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends ScraperController
{
    public function index(){
        $opinions = $this->getBookingOpinion();
        return view('index',[
            'opinions'=>$opinions
        ]);
    }
    public function rules(){
        return view('rules');
    }
}
