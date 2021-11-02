@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-4 mb-4">Dettaglio {{ $comic['title'] }}</h1>
            <img src="{{ $comic['thumb'] }}" alt="Immagine Fumetto">
            <ul>
                <li>Tipo: {{ $comic['type'] }};</li>
                <li>Descrizione: {{ $comic['description'] }};</li>
                <li>Prezzo: {{ $comic['price'] }} €;</li>
                <li>Serie: {{ $comic['series'] }};</li>
                <li>Data di vendita: {{ $comic['sale_date'] }};</li>
                <li>Tipo: {{ $comic['type'] }};</li>
            </ul>
        </div>
    </div>
</div>
@endsection