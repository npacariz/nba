<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\News::with('user')->paginate(10);

        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        $news = $news->with('user')->first();

        return view('news.show', compact('news'));
    
    }
}
