<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FacebookProxyController extends Controller
{
    public function proxy(Request $request)
    {
        $url = 'https://www.facebook.com/plugins/customer_chat/SDK';
        $query = $request->query();
        $response = Http::get($url, $query);

        return $response;
    }
}
