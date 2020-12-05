@extends('layout')

@section('content')

    <div class="container md-5">

    <div class="card-group">
        <div class="card">
        <img src="{{$movies->photo}}">
        </div>
        <div class="card">
            <h5 class="card-title font-weight-bold mt-5">{{$movies->title}}</h5>
            <p class="mt-2">rating : {{$movies->rating}}</p>
            <p class="mt-lg-5">{{$movies->description}}</p>
            <p class="mt-lg-5">kategori : {{$movies->genre[0]->name}}</p>

        </div>
    </div>

        <table class="table">
            <thead>
            <tr>
                <th class ="text-center bg-secondary"scope="col" >episode</th>
                <th class ="text-center bg-secondary" scope="col">judul</th>
            </tr>
            </thead>
            <tbody>
            @foreach($episodes as $episode)
            <tr>
                <th class="font-italic text-dark bg-light" scope="row">{{$episode->episode}}</th>
                <td class="font-italic text-dark bg-light">{{$episode->title}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>


       <p>{{$episodes->links()}}</p>
        </div>

@endsection
