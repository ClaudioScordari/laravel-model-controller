@extends('layouts.main-layout')

@section('page-title', 'Home')

{{-- Sezione contenuto principale --}}
@section('main-content')
<div class="container">
    <ul>
        @foreach ($movies as $oneMovie)    
            <li>
                <h3>Titolo: {{ $oneMovie->title }}</h3>
                <h5>Titolo originale: {{ $oneMovie->original_title }}</h5>
                <br>
                <div>Nazionalità: {{ $oneMovie->nationality }}</div>
                <div>Data di uscita: {{ $oneMovie->date }}</div>
                <div>Voto: {{ $oneMovie->vote }}</div>
            </li>
            <br>
            <hr>
        @endforeach
    </ul>
</div>
@endsection
