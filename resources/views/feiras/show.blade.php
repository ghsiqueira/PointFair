@extends('layouts.main')

@section('title', $feira->title)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/feiras/{{ $feira->image }}" class="img-fluid" alt="{{ $feira->title }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $feira->title }}</h1>
        <p class="feira-city"><ion-icon name="location-outline"></ion-icon> {{ $feira->city }}</p>
        <p class="feira-participants"><ion-icon name="people-outline"></ion-icon> X Feirantes</p>
        <h3>A feira conta com:</h3>
        @if (isset($feira->items))
          <ul id="items-list">
          @foreach ($feira->items as $item)
              <li><ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span></li>
          @endforeach
          </ul>
        @endif

        </ul>
      </div>
      <div class="col-md-12" id="segmento-container">
        <h3>Sobre a Feira:</h3>
        <p class="feira-segmento">{{ $feira->segmento }}</p>
      </div>
    </div>
  </div>

@endsection