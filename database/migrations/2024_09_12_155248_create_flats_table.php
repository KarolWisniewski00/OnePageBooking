<?php

use App\Models\Flat;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('flats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('link');
            $table->string('adress');
            $table->text('description');
            // Ustawienie wszystkich zdjęć jako nullable
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
            $table->string('foto3')->nullable();
            $table->string('foto4')->nullable();
            $table->string('foto5')->nullable();
            $table->string('foto6')->nullable();
            $table->string('foto7')->nullable();
            $table->string('foto8')->nullable();
            $table->string('foto9')->nullable();
            $table->string('foto10')->nullable();
            $table->string('foto11')->nullable();
            $table->string('foto12')->nullable();
            $table->string('foto13')->nullable();
            $table->string('foto14')->nullable();
            $table->string('foto15')->nullable();
            $table->string('foto16')->nullable();
            $table->string('foto17')->nullable();
            $table->string('foto18')->nullable();
            $table->string('foto19')->nullable();
            $table->string('foto20')->nullable();
            $table->string('foto21')->nullable();
            $table->string('foto22')->nullable();
            $table->timestamps();
        });

        $flat = new Flat();
        $flat->name = 'ZB APARTMENT LUXOR';
        $flat->link = 'https://www.booking.com/hotel/pl/zacisze-bobrowniki.pl.html?aid=1263239&label=PShare-Pulse-HtUu9z%401684336347&sid=68bf73d8faacbd39b88f918c7cff31f8&dist=0&keep_landing=1&sb_price_type=total&type=total&';
        $flat->adress = '42-583 Bobrowniki ul.żurawia 4/2';
        $flat->description = 'Sześcioosobowy apartament Premium Luxor z własnym ogrodem. Szukasz relaksu spokoju to dobrze trafiłeś. Super okazja dla osób podróżujących i korzystających z lotniska Katowice Pyrzowice';
        $flat->foto1 = 'luxor1.jpg';
        $flat->foto2 = 'luxor2.jpg';
        $flat->foto3 = 'luxor3.jpg';
        $flat->foto4 = 'luxor4.jpg';
        $flat->foto5 = 'luxor5.jpg';
        $flat->foto6 = 'luxor6.jpg';
        $flat->foto7 = 'luxor7.jpg';
        $flat->foto8 = 'luxor8.jpg';
        $flat->foto9 = 'luxor9.jpg';
        $flat->foto10 = 'luxor10.jpg';
        $flat->foto11 = 'luxor11.jpg';
        $flat->foto12 = 'luxor12.jpg';
        $flat->foto13 = 'luxor13.jpg';
        $flat->foto14 = 'luxor14.jpg';
        $flat->foto15 = 'luxor15.jpg';
        $flat->foto16 = 'luxor16.jpg';
        $flat->foto17 = 'luxor17.jpg';
        $flat->foto18 = 'luxor18.jpg';
        $flat->foto19 = 'luxor19.jpg';
        $flat->foto20 = 'luxor20.jpg';
        $flat->foto21 = 'luxor21.jpg';
        $flat->foto22 = 'luxor22.jpg';
        $flat->save();

        $flat = new Flat();
        $flat->name = 'ZB APARTMENT GREY';
        $flat->link = 'https://www.booking.com/hotel/pl/zb-apartment-black-bytom-centrum-piekary-slaskie-siemianowice-chorzow.pl.html?aid=1263239&label=PShare-Pulse-HtUu9z%401684336347&sid=68bf73d8faacbd39b88f918c7cff31f8&dest_id=-496464;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=7;hpos=7;no_rooms=1;req_adults=2;req_children=0;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1713783914;srpvid=bd934dea6d9601cf;type=total;ucfs=1&#hotelTmpl';
        $flat->adress = '41-940 Piekary SLaskie ul.Kopernika 4';
        $flat->description = 'Apartament Grey w centrum Bytomia doskonałe miejsce dla osób podróżujących , które szukają komfortu szybkiego internetu i wygody. To idealna baza wypadowa do zwiedzania miasta oraz okolicznych atrakcji.';
        $flat->foto1 = '1.jpeg';
        $flat->foto2 = '2.jpeg';
        $flat->foto3 = '3.jpeg';
        $flat->foto4 = '4.jpeg';
        $flat->foto5 = '5.jpeg';
        $flat->foto6 = '7.jpeg';
        $flat->foto7 = '6.jpeg';
        $flat->foto8 = '8.jpeg';
        $flat->foto9 = null;
        $flat->foto10 = null;
        $flat->foto11 = null;
        $flat->foto12 = null;
        $flat->foto13 = null;
        $flat->foto14 = null;
        $flat->foto15 = null;
        $flat->foto16 = null;
        $flat->foto17 = null;
        $flat->foto18 = null;
        $flat->foto19 = null;
        $flat->foto20 = null;
        $flat->foto21 = null;
        $flat->foto22 = null;
        $flat->save();

        $flat = new Flat();
        $flat->name = 'ZB APARTMENT BEIGE';
        $flat->link = 'https://www.booking.com/Pulse-tpR9h6';
        $flat->adress = '41-943 Piekary Śląskie ul.Bursztynowa 20/2';
        $flat->description = 'Dwu pokojowy apartament typu Premium Beige z balkonem w bloku 3 piętrowym. Nowoczesny wystój zapewni wszystkim podróżującym komfort i relaks.';
        $flat->foto1 = '3.jpg';
        $flat->foto2 = '2.jpg';
        $flat->foto3 = '1.jpg';
        $flat->foto4 = '4.jpg';
        $flat->foto5 = '5.jpg';
        $flat->foto6 = '6.jpg';
        $flat->foto7 = '7.jpg';
        $flat->foto8 = '8.jpg';
        $flat->foto9 = '9.jpg';
        $flat->foto10 = '10.jpg';
        $flat->foto11 = '11.jpg';
        $flat->foto12 = '12.jpg';
        $flat->foto13 = '13.jpg';
        $flat->foto14 = '14.jpg';
        $flat->foto15 = '15.jpg';
        $flat->foto16 = '16.jpg';
        $flat->foto17 = '17.jpg';
        $flat->foto18 = '18.jpg';
        $flat->foto19 = '19.jpg';
        $flat->foto20 = '20.jpg';
        $flat->foto21 = '21.jpg';
        $flat->foto22 = '22.jpg';
        $flat->save();

        $flat = new Flat();
        $flat->name = 'ZB APARTMENT GOLD';
        $flat->link = 'https://www.booking.com/hotel/pl/zb-apartment-gold-piekary-bytom-slaskie-siemianowice-chorzow.pl.html';
        $flat->adress = '41-940 Piekary Śląskie ul.Kopernika 49';
        $flat->description = 'Dwu pokojowy apartament typu Gold z balkonem w bloku 3 piętrowym. Nowoczesny wystój zapewni wszystkim podróżującym komfort i relaks.';
        $flat->foto1 = 'gold1.jpg';
        $flat->foto2 = 'gold2.jpg';
        $flat->foto3 = 'gold3.jpg';
        $flat->foto4 = 'gold4.jpg';
        $flat->foto5 = 'gold5.jpg';
        $flat->foto6 = 'gold11.jpg';
        $flat->foto7 = 'gold7.jpg';
        $flat->foto8 = 'gold8.jpg';
        $flat->foto9 = 'gold9.jpg';
        $flat->foto10 = 'gold10.jpg';
        $flat->foto11 = 'gold6.jpg';
        $flat->foto12 = 'gold12.jpg';
        $flat->foto13 = 'gold13.jpg';
        $flat->foto14 = 'gold14.jpeg';
        $flat->foto15 = null;
        $flat->foto16 = null;
        $flat->foto17 = null;
        $flat->foto18 = null;
        $flat->foto19 = null;
        $flat->foto20 = null;
        $flat->foto21 = null;
        $flat->foto22 = null;
        $flat->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flats');
    }
};
