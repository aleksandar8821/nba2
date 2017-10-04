
<h1>{{$team->name}}</h1>

<ul>
	<li><strong>Mail:</strong> {{$team->email}}</li>
	<li><strong>Address:</strong> {{$team->address}}</li>
	<li><strong>City:</strong> {{$team->city}}</li>
</ul>

  
<br>
Players:
<ul>
@foreach($team->players as $player)
	<li>
	    <a href="/players/{{$player->id}}">{{ $player->first_name }} &nbsp {{$player->last_name}}</a>
	</li>
@endforeach
</ul>