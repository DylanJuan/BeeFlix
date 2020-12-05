@extends('layout')

@section('content')

    <div class="container md-5 bg-secondary">
        @foreach($genres as $genre)
            <p class="blockquote text-lg-center text-dark bg-light mb-3">{{$genre->name}}</p>
            <div class="card-body">
                <div class="card-deck">
            @for($i=0; $i < count($genre->movie);$i++)

                     <div class="card text-white bg-dark mb-5">
                        <img src="{{$genre->movie[$i]->photo}}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-header text-center" >{{$genre->movie[$i]->title}}</h5>
                                <a href="/detail/{{$genre->movie[$i]->id}}"><button type="button" class="btn btn-light btn-block">LIHAT FILM</button></a>

                            </div>


                        </div>

            @endfor
                </div>
            </div>

        @endforeach
    </div>
@endsection
