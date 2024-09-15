<?php

namespace App\Http\Controllers;

use App\Models\Flat;
use Illuminate\Http\Request;

class IndexController extends ScraperController
{
    public function index(){
        $opinions = $this->getBookingOpinion();
        $opinions_beige = $this->getBookingOpinion('https://www.booking.com/Pulse-tpR9h6');
        $opinions_grey = $this->getBookingOpinion('https://www.booking.com/hotel/pl/zb-apartment-black-bytom-centrum-piekary-slaskie-siemianowice-chorzow.pl.html?aid=1263239&label=PShare-Pulse-HtUu9z%401684336347&sid=68bf73d8faacbd39b88f918c7cff31f8&dest_id=-496464;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=7;hpos=7;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1713783914;srpvid=bd934dea6d9601cf;type=total;ucfs=1&#hotelTmpl');
        
        $flats = Flat::all();
        
        
        return view('index',[
            'opinions'=>$opinions,
            'opinions_beige'=>$opinions_beige,
            'opinions_grey'=>$opinions_grey,
            'flats'=>$flats,
        ]);
    }
    public function rules(){
        return view('rules');
    }
}
