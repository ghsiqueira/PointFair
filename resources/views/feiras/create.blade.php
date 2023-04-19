@extends('layouts.main')

@section('title', 'Adicionar Feira')

@section('content')

<div id="feira-create-container" class="col-md-6 offset-md-3">
  <h1>Adicione a feira</h1>
  <form action="/feiras" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem da Feira:</label>
      <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group">
      <label for="title">Feira:</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nome da feira">
    </div>
    <div class="form-group">
        <label for="date">Data da feira:</label>
        <input type="date" id="date" class="form-control" name="date">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="city" id="city" class="form-control" name="city">
    </div>
    <div class="form-group">
      <label for="title">Qual o segmento?</label>
      <textarea name="segmento" id="segmento" class="form-control" placeholder="Qual o segmento da feira?"></textarea>
    </div>
    <div class="form-group">
      <label for="title">Adicione informações do que tem na feira:</label>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Culinária"> Culinária
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Alimentos"> Alimentos (Frutas, legumes, etc)
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Artesanato"> Artesanato
      </div>
      <div class="form-group">	
        <input type="checkbox" name="items[]" value="Antiguidades"> Antiguidades
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Feira">
  </form>
</div>

@endsection