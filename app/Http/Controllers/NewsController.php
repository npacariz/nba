<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{
    public function index()
    {
        $news = \App\News::with('user')->latest()->paginate(10);

        return view('news.index', compact('news'));
    }

    public function show(News $news)
    {
        $news = $news->with('user')->first();

        return view('news.show', compact('news'));
    
    }

    public function teamNews($name)
    {
      
        $team = \App\Team::with('news')->where('name', $name)->latest()->paginate(2);;
        
        
        return view('news.team-news', compact('team'));
    }
}
