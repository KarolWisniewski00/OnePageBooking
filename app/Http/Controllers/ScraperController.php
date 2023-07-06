<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client as GuzzleHttpClient;
use Illuminate\Http\Request;

class ScraperController extends Controller
{
    public function getBookingOpinion(string $string = 'https://www.booking.com/Pulse-HtUu9z')
    {
        $client = new GuzzleHttpClient();
        $url = $string;
        $page = $client->request('GET', $url);
        $html = $page->getBody();

        $dom = new \DOMDocument();
        libxml_use_internal_errors(true); // Ignorowanie błędów HTML
        $dom->loadHTML($html);
        libxml_clear_errors();

        $xpath = new \DOMXPath($dom);
        $featuredReviewers = $xpath->query("//div[contains(@class, 'featured_reviewer')]");

        $reviews = [];

        if ($featuredReviewers->length > 0) {
            foreach ($featuredReviewers as $featuredReviewer) {
                $doc = new \DOMDocument();
                $doc->appendChild($doc->importNode($featuredReviewer, true));

                $span_content = $doc->getElementsByTagName('span')[0]->textContent;
                $img_profile_src = $doc->getElementsByTagName('img')[0]->getAttribute('src');
                $profile_name = $doc->getElementsByTagName('span')[1]->textContent;
                $img_country_src = $doc->getElementsByTagName('img')[1]->getAttribute('src');
                $country_name = $doc->getElementsByTagName('span')[2]->textContent;

                $review = [
                    'span_content' => trim($span_content),
                    'img_profile_src' => $img_profile_src,
                    'profile_name' => $profile_name,
                    'img_country_src' => $img_country_src,
                    'country_name' => trim($country_name)
                ];

                $reviews[] = $review;
            }
        } else {
            return ['error' => '404'];
        }

        return $reviews;
    }
}
