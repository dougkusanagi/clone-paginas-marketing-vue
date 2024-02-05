<?php

namespace App\Http\Controllers;

use App\Factories\PageCrawlerServiceFactory;
use Illuminate\Http\Request;

class ClonedPageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(['url' => 'required|url']);

        PageCrawlerServiceFactory::create()
            ->start($request->get('url'));
    }
}
