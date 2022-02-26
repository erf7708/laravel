<?php

namespace App\Http\Controllers;
use Goutte\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AmazonController extends Controller
{
    private $results = array();
    public function index()
    {

//        $http = Http::withoutVerifying()->get($url);
//        return $http->body();
//        dd($http->body());
        $client=new Client();
        $url='http://www.amazon.de/-/en/Samsung-Unlocked-Smartphone-Infinity-Function-Awesome-Violet/dp/B09GW469KJ?ref_=Oct_DLandingS_D_9a4da5b1_65&smid=A3JWKAKR8XB7XF';
        $page=$client->request('GET',$url);

        dd($page);

    echo    $page->filter('#productTitle')->text();

//     echo $page->filter('.a-lineitem a-align-topn')->text();

//        echo "pre";
//        print_r($page);

//        return view('Amazon');

    }
}
