@extends('layout.app')

@section('main')
    <main>
        <div>
            @foreach ($fumetti as $elem)
                <div>
                    <img src="{{ $elem['thumb'] }}" alt="magazine">
                    <h6>{{ $elem['title'] }} </h6>
                </div>
            @endforeach
        </div>
    </main>
@endsection