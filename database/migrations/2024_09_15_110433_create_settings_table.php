<?php

use App\Models\Setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->text('place');
            $table->string('type');
            $table->text('value');
            $table->timestamps();
        });

        $setting = new Setting();
        $setting->uuid = 'header';
        $setting->place = 'Nagłówek nad logo';
        $setting->type = 'text';
        $setting->value = 'LUKSUSOWE APARTAMENTY';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'ig_link';
        $setting->place = 'Link do instagrama';
        $setting->type = 'text';
        $setting->value = 'https://instagram.com/zb.apartments?igshid=MzRlODBiNWFlZA==';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'b_link';
        $setting->place = 'Link do bookinga';
        $setting->type = 'text';
        $setting->value = 'https://www.booking.com/Pulse-HtUu9z';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'about';
        $setting->place = 'Brązowy napis pod sliderem zmieniającym zdjęcia';
        $setting->type = 'text';
        $setting->value = 'O nas';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1';
        $setting->place = 'Nagłówek pod sliderem zmieniającym zdjęcia';
        $setting->type = 'text';
        $setting->value = 'Zrelaksuj się w naszych luksusowych apartamentach - czeka na ciebie niezapomniany wypoczynek.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'paragraf_1';
        $setting->place = 'Pierwszy paragraf pod sliderem zmieniającym zdjęcia';
        $setting->type = 'text';
        $setting->value = 'Firma Nowe inspiracje - mieszkanie z pomysłem stworzyła nowoczesne apartamenty pod wynajem krótkoterminowy pod nazwą ZB Apartment który zapewni Ci komfortowy i luksusowy odpoczynek. Oferujemy wyjątkowe, nowoczesne apartamenty do wynajęcia w okolicy Piekary Śląskie Bytom Bobrowniki Chorzów Katowice.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'paragraf_2';
        $setting->place = 'Drugi paragraf pod sliderem zmieniającym zdjęcia';
        $setting->type = 'text';
        $setting->value = 'Nasz zespół posiada wieloletnie doświadczenie, które pozwala nam stworzyć warunki spełniające wszystkie twoje oczekiwania i potrzeby.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'paragraf_3';
        $setting->place = 'Trzeci paragraf pod sliderem zmieniającym zdjęcia';
        $setting->type = 'text';
        $setting->value = 'Dla nas każdy gość jest wyjątkowy. Dokładamy wszelkich starań, aby Twój pobyt w naszych apartamentach był przyjemny i niezapomniany. Tworzymy wspomnienia, które będą zachętą do powrotu do naszej lokalizacji i skorzystania z naszych usług.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'foto_1';
        $setting->place = 'Zdjęcie pod sliderem zmieniającym zdjęcia';
        $setting->type = 'photo';
        $setting->value = 'gl.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'apart';
        $setting->place = 'Brązowy napis w sekcji drugiej na przyciemnionym tle';
        $setting->type = 'text';
        $setting->value = 'Apartamenty';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_2';
        $setting->place = 'Nagłówek w sekcji drugiej na przyciemnionym tle';
        $setting->type = 'text';
        $setting->value = 'Strefa twojego komfortu';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'bene';
        $setting->place = 'Brązowy napis w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Zalety';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_3';
        $setting->place = 'Nagłówek w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Przewaga naszych apartamentów';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'svg_1';
        $setting->place = 'Zdjęcie 1 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'photo';
        $setting->value = 'finish.svg';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_svg_1';
        $setting->place = 'Nagłówek 1 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Nowoczesne wnętrza z eleganckimi detalami';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'p_svg_1';
        $setting->place = 'Paragraf 1 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Zapewniamy wyjątkowe wykończenie wnętrz, łącząc nowoczesny design z eleganckimi detalami, neutralnymi kolorami i funkcjonalnymi rozwiązaniami.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'svg_2';
        $setting->place = 'Zdjęcie 2 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'photo';
        $setting->value = 'privacy.svg';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_svg_2';
        $setting->place = 'Nagłówek 2 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Bezpieczna i poufna przestrzeń';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'p_svg_2';
        $setting->place = 'Paragraf 2 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Zapewniamy pełną prywatność, gwarantując nienaruszalność pomieszczeń i mienia mieszkańców, a także dyskrecję w rozpowszechnianiu informacji.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'svg_3';
        $setting->place = 'Zdjęcie 3 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'photo';
        $setting->value = 'wifi.svg';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_svg_3';
        $setting->place = 'Nagłówek 3 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Wi-Fi';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'p_svg_3';
        $setting->place = 'Paragraf 3 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Zapewniamy bezprzewodowy internet o wysokiej prędkości, który jest dostępny bezpłatnie.';
        $setting->save();


        $setting = new Setting();
        $setting->uuid = 'svg_4';
        $setting->place = 'Zdjęcie 4 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'photo';
        $setting->value = 'comfort.svg';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_svg_4';
        $setting->place = 'Nagłówek 4 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'W pełni komfortowe doświadczenie';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'p_svg_4';
        $setting->place = 'Paragraf 4 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Zapewniamy Ci możliwość prowadzenia własnego trybu życia, ciesząc się wszystkimi udogodnieniami, bez ograniczeń i poczucia, że jesteś tymczasowym gościem. U nas możesz poczuć się jak w domu.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'svg_5';
        $setting->place = 'Zdjęcie 5 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'photo';
        $setting->value = 'building.svg';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_svg_5';
        $setting->place = 'Nagłówek 5 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Doskonała infrastruktura wokół apartamentów';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'p_svg_5';
        $setting->place = 'Paragraf 5 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Większość naszych apartamentów znajduje się na terenach o dogodnej infrastrukturze, zapewniających łatwy dostęp do wielu atrakcji i udogodnień.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'svg_6';
        $setting->place = 'Zdjęcie 6 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'photo';
        $setting->value = 'price.svg';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_svg_6';
        $setting->place = 'Nagłówek 6 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Atrakcyjne ceny dostosowane do Twoich preferencji';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'p_svg_6';
        $setting->place = 'Paragraf 6 w sekcji trzeciej grafik wektorowych';
        $setting->type = 'text';
        $setting->value = 'Oferujemy bardzo konkurencyjne ceny, które są uzależnione od sezonu, liczby osób oraz wybranego apartamentu. Dostosowujemy się do Twoich potrzeb, aby zapewnić Ci najlepszą ofertę.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'foto_4';
        $setting->place = 'Zdjęcie w sekcji 4 przed galerią apartamentów';
        $setting->type = 'photo';
        $setting->value = 'niz.jpg';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'h1_4';
        $setting->place = 'Nagłówek w sekcji 4 przed galerią apartamentów';
        $setting->type = 'text';
        $setting->value = 'Zobacz interesujący cię apartament';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'p_4';
        $setting->place = 'paragraf w sekcji 4 przed galerią apartamentów';
        $setting->type = 'text';
        $setting->value = 'Nasze ekskluzywne i komfortowe apartamenty są wyposażone w wysokiej jakości udogodnienia oraz znajdują się w pobliżu atrakcji. Nasza kompetentna obsługa zadba o Twoje potrzeby. Bezpieczne podróże służbowe i wypoczynkowe to nasza specjalność.';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'gallery';
        $setting->place = 'Opis galerii';
        $setting->type = 'text';
        $setting->value = 'Najlepsze udogodnienia';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'contact';
        $setting->place = 'Brązowy napis kontakt';
        $setting->type = 'text';
        $setting->value = 'Kontakt';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'contact_h1';
        $setting->place = 'Nagłówek kontakt';
        $setting->type = 'text';
        $setting->value = 'Skontaktuj się z nami';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'contact_tel';
        $setting->place = 'Numer telefonu - zapisać bez spacji';
        $setting->type = 'text';
        $setting->value = '+48731518516';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'contact_email';
        $setting->place = 'Email';
        $setting->type = 'text';
        $setting->value = 'zbapartamenty@gmail.com';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'contact_h1_adress';
        $setting->place = 'Nagłówek nad adresem';
        $setting->type = 'text';
        $setting->value = 'Biuro/Firma';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'contact_adress_1';
        $setting->place = 'Adres linia 1';
        $setting->type = 'text';
        $setting->value = 'Nowe Inspiracje';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'contact_adress_2';
        $setting->place = 'Adres linia 2';
        $setting->type = 'text';
        $setting->value = '41-943 Piekary Śląskie';
        $setting->save();

        $setting = new Setting();
        $setting->uuid = 'contact_adress_3';
        $setting->place = 'Adres linia 3';
        $setting->type = 'text';
        $setting->value = 'Ul.Sienkiewicza 1 - 1 piętro';
        $setting->save();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
