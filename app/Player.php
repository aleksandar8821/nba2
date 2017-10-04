<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function team()
    {
    	$this->belongsTo(Team::class, 'teams_id');
    }
}
