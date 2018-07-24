<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Team;
class Player extends Model
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
