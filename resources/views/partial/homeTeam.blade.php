<!-- Team Section -->
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! str_replace(["(", ")"], ["<span>", "</span>"], $titres[2]->h2) !!}</h2>
        </div>
        @php
            $i = rand(3, count($users))-1;
        @endphp 
        <div class="row">
            <div class="col-sm-4">
                <div class="member">
                    <img src="img/team/{{ $users[$i]->img }}" alt="">
                    <h2>{{ $users[$i]->nom }}</h2>
                    <h3>{{ $users[$i]->role->poste }}</h3>
                </div>
                <div class="buttons flex justify-center">
                    @can('update', $users)
                        <a href="{{route('user.edit',$users[$i]->id) }}" class="bg-white hover:bg-white-700 text-indigo-600 px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                    @endcan
                </div>
            </div>

            <!-- single member -->
                <div class="col-sm-4">
                    <div class="member">
                        <img src="{{asset("img/team/" . $users[0]->img) }}" alt="">
                        <h2>{{ $users[0]->nom }}</h2>
                        <h3>{{ $users[0]->role->poste}}</h3>
                    </div>
                </div>
            @if ($i === count($users)-1)
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/{{ $users[$i-1]->img }}" alt="">
                        <h2>{{ $users[$i-1]->nom }}</h2>
                        <h3>{{ $users[$i-1]->role->poste }}</h3>
                    </div>
                </div>
            @else
                <div class="col-sm-4">
                    <div class="member">
                        <img src="img/team/{{ $users[$i+1]->img }}" alt="">
                        <h2>{{ $users[$i+1]->nom }}</h2>
                        <h3>{{ $users[$i+1]->role->poste }}</h3>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- Team Section end-->