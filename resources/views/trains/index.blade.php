@extends('layouts.app')

@section('title')

@section('content')
    <div class="container">
        <h2>Treni in partenza oggi</h2>
        <ul>
            @foreach ($trains as $train)
                <li>
                    {{ $train->departure_station }} - {{ $train->arrival_station }}
                </li>
                <span>Partenza {{ $train->departure_time }}</span>
                <span>Arrivo {{ $train->arrival_time }}</span>
            @endforeach
        </ul>
    </div>
@endsection
