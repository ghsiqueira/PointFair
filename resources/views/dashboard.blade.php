@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
  <div class="feed-wrapper">
    <div class="feeds-container">
      <div class="user-feed">
        <div class="user">
          <img src="{{ asset('img\feirantes\florista.jpg') }}" alt="Foto de perfil">
          <div class="user-info">
            <h2>JuliaRosas</h2>
            <button class="follow-button">Seguir</button>
          </div>
        </div>
        <div class="user-post">
          <img src="{{ asset('img\produtos\floricultura.jpg') }}" alt="Foto do post">
          <div class="post-info">
            <h3>Título do Post 1</h3>
            <p>Embu das Artes - Feira de Flores</p>
            <p class="post-date">Publicado em 25 de Abril de 2023</p>
          </div>
        </div>
      </div>

      <div class="user-feed">
        <div class="user">
          <img src="{{ asset('img\feirantes\bibliotecaria.jpg') }}" alt="Foto de perfil">
          <div class="user-info">
            <h2>ClaudiaDosLivros</h2>
            <button class="follow-button">Seguir</button>
          </div>
        </div>
        <div class="user-post">
          <img src="{{ asset('img\produtos\livros.jpg') }}" alt="Foto do post">
          <div class="post-info">
            <h3>Título do Post 2</h3>
            <p>Santana - Feira dos Livros</p>
            <p class="post-date">Publicado em 24 de Abril de 2023</p>
          </div>
        </div>
      </div>

      <div class="user-feed">
        <div class="user">
          <img src="{{ asset('img\feirantes\artesa.jpg') }}" alt="Foto de perfil">
          <div class="user-info">
            <h2>CraftyLeticia</h2>
            <button class="follow-button">Seguir</button>
          </div>
        </div>
        <div class="user-post">
          <img src="{{ asset('img\produtos\artesanato.jpeg') }}" alt="Foto do post">
          <div class="post-info">
            <h3>Título do Post 3</h3>
            <p>Taboão da Serra - Feira Lago do Taboão</p>
            <p class="post-date">Publicado em 23 de Abril de 2023</p>
          </div>
        </div>
        @livewire('infinite-scroll')
      </div>
    </div>
  </div>
<style>
  .feeds-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    max-width: 600px;
    margin: 0 auto;
  }

  .user-feed {
    width: 100%;
    margin-bottom: 40px;
  }

  .user {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .user img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin-right: 20px;
  }

  .user-info {
    flex: 1;
  }

  h2 {
    margin-top: 0;
  }

  .follow-button {
    background-color: #3498db;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
  }

  .user-post {
    margin-bottom: 20px;
  }

  .user-post img {
    max-width: 400px; /* ajuste a largura máxima da imagem */
    height: auto;
    margin-bottom: 10px;
  }

  .post-info {
    text-align: justify;
  }

  h3 {
    margin-top: 0;
  }

  .post-date {
    margin-top: 10px;
    font-style: italic;
  }
</style>
@endsection