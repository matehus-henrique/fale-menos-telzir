
    @extends('layouts.main')

    @section('title', 'Telzir')



    @section('content')
    <div class="container">
      <div class="header">
        <h2>Simula  suas ligações</h2>
      </div>

      <form action="{{ route('calculate') }}" id="form" class="form">
      @csrf
        <div class="form-control">
          <label for="username">Nome de usuário</label>
          <input
            type="text"
            id="username"
            name="username"
            placeholder="Digite seu nome de usuário..."
          />
          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
          <label for="email">Numero</label>
          <input type="tel" id="phone" name="phone"">

          <i class="fas fa-exclamation-circle"></i>
          <i class="fas fa-check-circle"></i>
          <small>Mensagem de erro</small>
        </div>

        <div class="form-control">
            <label for="codigo1">Código de origem</label>
            <input
              type="text"
              id="codigo1"
              name="codigo1"
              placeholder="Digite seu nome de codigo de origem..."
            />
            <i class="fas fa-exclamation-circle"></i>
            <i class="fas fa-check-circle"></i>
            <small>Mensagem de erro</small>
          </div>

          <div class="form-control">
            <label for="codigodestino">Código de destino</label>
            <input
              type="text"
              id="codigodestino"
              name="codigodestino"
              placeholder="Digite seu nome de codigo de destino..."
            />
            <i class="fas fa-exclamation-circle"></i>
            <i class="fas fa-check-circle"></i>
            <small>Mensagem de erro</small>
          </div>

          <div class="form-control">
            <label for="tempo">Tempo</label>
            <input
              type="text"
              id="tempo"
              name="tempo"
              placeholder="Digite seu tempo de ligação"
            />
            <i class="fas fa-exclamation-circle"></i>
            <i class="fas fa-check-circle"></i>
            <small>Mensagem de erro</small>
          </div>

          <div class="form-control">
            <label  for="plano">Plano</label>
            <select class="select"
             id="plano"
              name="plano"
             >
             <option value=""></option>
             <option value="1">Fale 30</option>
             <option value="2">Fale 60</option>
             <option value="3">Fale 120</option>
             </select>


          </div>


	 <div class="form-control">

	<button type="submit">Simular FaleMais da Telzir</button>

          </div>



      </form>
    </div>

    <script
      src="https://kit.fontawesome.com/f9e19193d6.js"
      crossorigin="anonymous"
    ></script>

    <script src="./scripts.js"></script>

    @endsection
