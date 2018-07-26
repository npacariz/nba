<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Create;
use App\Comment;
use App\Mail\CommentReceived;

class CommentController extends Controller
{
    public function __construct() {
        $this->middleware('checkComment')->only('store');
    }

   public function store(Team $team) {

    $this->validate(request(),[
        'content' => 'required|min:10'
    ]);
       
    $comment = Comment::create([
        'content' => request('content'),
        'user_id' => auth()->user()->id,
        'team_id' => $team->id
    ]); 
       
        

    \Mail::to($team->email)->send(new CommentReceived($comment));

    return redirect('/teams/'.$team->id);


   }

   public function show() {

        return view('forbidden.forbidden-comment');
   }
    
}
