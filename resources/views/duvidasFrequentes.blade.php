@extends('layouts.main')

@section('title', 'Point Fair')

@section('content')

<main class="dvds-frequentes">
  <div class="duvidas-frequentes">
    <h1>Dúvidas Frequentes</h1>
    <p>Caso não encontre sua dúvida abaixo, entre em contato conosco!</p>
  </div>
  <section id="Questions" class="Questions">
    <div id="questionItem" class="questionItem">
      <div class="q-and-a">
        <div class="line"></div>
        <div class="text-q-and-a">
          <p class="question"></p>
          <i class="fa-solid fa-plus"></i>
        </div>
        <div class="answer showOff"><p></p></div>
        <div class="line"></div>
      </div>
    </div>
  </section>
  <div class="link-form">
    <p>Se sua dúvida não foi respondida <a href="/contato">clique aqui.</a></p>
  </div>
</main>

@endsection