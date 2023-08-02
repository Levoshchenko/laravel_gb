<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Jobs\NewsParsingJob;
use App\Services\Contracts\Parser;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Parser $parser): string
    {
        $url = "https://news.rambler.ru/rss/tech/";
        
        $urls = [
            "https://news.rambler.ru/rss/tech",
            "https://news.rambler.ru/rss/community",
            "https://news.rambler.ru/rss/world",
            "https://news.rambler.ru/rss/moscow_city",
            "https://news.rambler.ru/rss/politics",
            "https://news.rambler.ru/rss/incidents",
            "https://news.rambler.ru/rss/starlife",
            "https://news.rambler.ru/rss/army",
            "https://news.rambler.ru/rss/games",
            "https://news.rambler.ru/rss/articles",
            "https://news.rambler.ru/rss/Omsk",
            "https://news.rambler.ru/rss/Khanty",
            "https://news.rambler.ru/rss/Saransk",
        ];


        $parser->setLink($url)->saveParseData();

	 foreach ($urls as $url) {
            dispatch(new NewsParsingJob($url));
        }
        
        return "Data saved";
    }
}
