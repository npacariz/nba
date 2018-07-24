<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
class PlayerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show($id)
    {
        $player = Player::with('team')->findOrFail($id);

        
        return view('pages.player', compact('player'));
    }
}
