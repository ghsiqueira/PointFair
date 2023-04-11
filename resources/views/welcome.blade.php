@extends('layouts.main')

@section('title', 'Point Fair')

@section('content')

@foreach($feiras as $feira)
    <p>{{ $feira->title }} -- {{ $feira->city }}</p>
@endforeach

@endsection