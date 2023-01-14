@extends('layout.app')
@section('titolo-pagina', "DC Comics - Comics")
@section('main')
    <main>
        <div class="cont-card">
            @foreach ($fumetti as $elem)
                <div class="cards">
                    <img src="{{ $elem['thumb'] }}" alt="magazine">
                    <h6 class="text-white">{{ $elem['title'] }} </h6>
                </div>
            @endforeach
        </div>
    </main>
@endsection