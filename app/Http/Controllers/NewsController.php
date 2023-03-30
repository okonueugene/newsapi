<?php
namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(Request $request)
    {
        $searchQuery = 'technology+innovation+manufacturing+sector'; // Refine search parameters

        $client = new Client();

        $crawler = $client->request('GET', 'https://news.google.com/news/rss/headlines/section/topic/TECHNOLOGY?hl=en-US&gl=US&ceid=US:en&q='.$searchQuery.'+location:africa');

        $xml = simplexml_load_string($crawler->getBody()->getContents());

        $json = json_encode($xml);

        $array = json_decode($json, true);

        $news = $array['channel']['item'];

        return response()->json($news);
    }
}
