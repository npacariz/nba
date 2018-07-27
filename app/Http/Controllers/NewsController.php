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

    public function create()
    {
        $teams = Team::all();
        return view('news.create', compact('teams'));
    }

    public function teamNews($name)
    {
      
        $team = Team::where('name', $name)->first();
        $news = $team->news()->with('teams', 'user')->latest()->paginate(5);
     
        return view('news.team-news', compact('news'));
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'content' => 'required',
            'teams' => 'required|array'
        ]);

        $news = News::create([
            'title' => request('title'),
            'content' => request('content'),
            'user_id' => auth()->user()->id
        ]);

        $news->teams()->attach(request('teams'));

        session()->flash('success', 'Thank you for publishing article on www.nba.com.'); 

        return redirect('/news');
        
    }   
}
