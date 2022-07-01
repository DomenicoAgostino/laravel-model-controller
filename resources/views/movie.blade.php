@extends('layouts.main')

@section('content')



<div class="d-flex container flex-wrap text-center">
    <h2>Film Migliori Di Sempre - Secondo Voi.</h2>
    @foreach ($films as $item )
        <div>
                <p>Film: {{$item->title}}</p><br>
                <p>Nazionalità: {{$item->nationality}}</p><br>
                <p>Data di uscita: {{$item->date}}</p><br>
                <p>Il Vostro Voto: {{$item->vote}} / 10</p><br><br>
                <hr>

        </div>
    @endforeach
</div>

@endsection