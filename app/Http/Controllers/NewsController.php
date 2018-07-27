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
      
        $team = Team::where('name', $name)->first();
        $news = $team->news()->with('teams', 'user')->latest()->paginate(5);
     
        return view('news.team-news', compact('news'));
    }
}
