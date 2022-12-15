<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("support.index");
    }

    public function send(Request $request)
    {
        // URL
        $apiURL = 'https://laurarochamatos.atlassian.net/rest/api/2/issue';

        // POST Data
        $postInput = [
            "fields" => [
                "project" => [ "key" => "MOON" ],
                "summary" => $request->title,
                "description" => $request->description,
                "issuetype" => [
                    "name" => "Melhoria"
                ]
            ]
        ];

        $response = Http::withBasicAuth("laurarochamarchese@gmail.com", "kqdjWZjJt9Rd40eNcKaA20B2")->post($apiURL, $postInput);

        $statusCode = $response->status();
        $responseBody = json_decode($response->getBody(), true);

       // echo $statusCode;  // status code

        return view("support.index");
        //dd($responseBody); // body response
    }
}
