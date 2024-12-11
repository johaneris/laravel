

<!-- hereda todo lo que tiene la pagina welcome -->

@extends('welcome')
@section('content')

<!-- un h1 por pagina -->

<h2>nose que estamos ahciendo // contacto </h2>
<div class="mb-3">
  <label for="email" class="form-label">Email address</label>
  <input type="email" class="form-control" id="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="mensaje" class="form-label">Mensaje</label>
  <textarea class="form-control" id="mensaje" rows="3"></textarea>
</div>

<button type = "button" class = "btn btn-outline-primary">Enviar</button>

@endsection
