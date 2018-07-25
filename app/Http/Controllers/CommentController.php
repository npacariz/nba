<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Create;
class CommentController extends Controller
{
   public function store(Team $team) {

    $this->validate(request(),[
        'content' => 'required|min:10'
    ]);

  
       
    $team->comments()->create([
        'content' => request('content'),
        'user_id' => auth()->user()->id
    ]); 
        
    return redirect('/teams/'.$team->id);


   }
    
}
