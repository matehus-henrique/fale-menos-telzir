@extends('layouts.main')

@section('title', 'Telzir')



@section('content')
  <body>
    <div class="container">
      <div class="header">
        <h2>Ressultado da sua Simulação</h2>
      </div>



      <form id="form" class="form">

        <div class="header">
          <p> Com o Fale Mais </p> {{ $data['total'] }}
          <p> Sem o Fale Mais </p> {{ $data['Partial'] }}
        </div>

       <button type="submit">Pedir  FaleMais da Telzir </button>

      </form>
    </div>

    <script
      src="https://kit.fontawesome.com/f9e19193d6.js"
      crossorigin="anonymous"
    ></script>

    <script src="./scripts.js"></script>

    @endsection
