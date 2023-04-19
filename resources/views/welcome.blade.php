@extends('layouts.main')

@section('title', 'Point Fair')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque uma feira</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="feiras-container" class="col-md-12">
    @if($search)
    <h2>Buscando por: {{ $search }}</h2>
    @else
    <h2>Próximas Feiras</h2>
    <p class="subtitle">Veja as feiras dos próximos dias:</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($feiras as $feira)
        <div class="card col-md-3">
            <img src="/img/feiras/{{ $feira->image }}" alt="{{ $feira->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/Y', strtotime($feira->date)) }}</p>
                <h5 class="card-title">{{ $feira->title }}</h5>
                <p class="card-participants">X Participantes</p>
                <p class="card-segmento">{{ $feira->segmento }}</p>
                <a href="/feiras/{{ $feira->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($feiras) == 0 && $search)
            <p>Não foi possível encontrar nenhuma feira com {{ $search }}! <a href="/">Ver todos</a></p>
        @elseif(count($feiras) == 0)
            <p>Sem feiras disponíveis</p>
        @endif
    </div>
</div>

@endsection