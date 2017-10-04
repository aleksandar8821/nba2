@foreach($teams as $team)
          <div class="">

            <h2 class="">
                <a href="/teams/{{$team->id}}">
                    {{ $team->name }}
                </a>
            </h2>
            <p>{{ $team->city }} </p>
        </div>
        @endforeach