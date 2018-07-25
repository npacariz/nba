<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    
    }

    public function index() 
    {
        $teams = Team::all();
 
       return view('pages.index', compact('teams'));
    }

    public function show() 
    {
        $team = Team::with('players', 'comments', 'comments.user')->first();
        
       return view('pages.show', compact('team'));
    }
}
