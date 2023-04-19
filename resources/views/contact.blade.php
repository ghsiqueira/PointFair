@extends('layouts.main')

@section('title', 'Point Fair')

@section('content')

<div class="titulo-contato">
   <h1>Contato</h1>
</div>
<section class="forms">
    <form id="contact-form">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit">Enviar</button>
    </form>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</section>

@endsection