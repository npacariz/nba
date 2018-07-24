<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
class PlayerController extends Controller
{
    public function show($id)
    {
        $player = Player::with('team')->findOrFail($id);

        
        return view('pages.player', compact('player'));
    }
}
