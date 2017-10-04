<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Team;

class PlayerController extends Controller{

	public function __construct()
	{
		$this->middleware('auth');
	}

    public function show($id)
    {
    	$player = Player::find($id);
    	$team = Team::find($player->teams_id);
    	return view('players.show', compact('player', 'team'));
    }
}
