<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apisController extends Controller
{
    public function pirate(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.nytimes.com/svc/movies/v2/reviews/search.json?query=Cutthroat%20Island&api-key=J23bwokS4SpGI8A6Ek5E599TeZu9qUnx');
        $data = json_decode($response->getBody()->getContents(), true);

        $movies = [];
        foreach($data['results']as $movie){
            $movies[] = [
                'nombre'=>$movie['display_title'],
                'sumary'=>$movie['summary_short'],
                'publication_date'=>$movie['publication_date'],
                'mpaa_rating'=>$movie['mpaa_rating']
            ];
        }
        return $movies;
    }

}
