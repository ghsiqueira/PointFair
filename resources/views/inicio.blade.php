@extends('layouts.main')

@section('title', 'Point Fair')

@section('content')

<div class="mainIndex">
    <div class="ScreenMain">
        <div class="TextInfo">
            <h1 class="mainPointFair">Point Fair</h1>
            <h2>Compre consciente, valorize o autônomo: <br> Juntos por um comércio justo e diverso!</h2>
            <p>O Point Fair tem o objetivo de divulgar feirantes.</p>
            <div class="buttons">
                <a href="">
                    <button class="btn btn-primary">Baixar App</button>
                </a>
                <a href="/sobrenos" class="saiba-mais">Saiba mais
                    <span class="iconify" data-icon="eva:arrow-ios-forward-fill" data-height="22"></span>
                </a>
            </div>
        </div>
        <div class="ImgHome">
            <img src="img/logo.png" alt="">
        </div>
    </div>
</div>
<script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>

@endsection