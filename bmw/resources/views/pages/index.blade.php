@extends('layouts.app')

@section('title', 'Araçlar')

@section('content')
    <h1>Araçlar</h1>

    @if($cars->count() > 0)
        <ul>
            @foreach($cars as $car)
                <li>{{ $car->make }} - {{ $car->model }} ({{ $car->year }})</li>
            @endforeach
        </ul>
    @else
        <p>Henüz araç bulunmamaktadir.</p>
    @endif
@endsection



    <!-- ... -->
