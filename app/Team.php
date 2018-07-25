<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Player;
use App\Comment;

class Team extends Model
{
    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function comments() {
        return  $this->hasMany(Comment::class);
     }
}
