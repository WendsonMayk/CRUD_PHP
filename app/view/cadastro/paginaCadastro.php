<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário com Bootstrap</title>
  <!-- Adicione o link para o CSS do Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Formulário de Cadastro</h5>
          <form action="/cadastro" method="POST">
            <div class="form-group">
              <label for="nomeCompleto">Nome Completo</label>
              <input type="text" class="form-control" name="nomeCompleto" id="nomeCompleto" placeholder="Digite seu nome completo">
            </div>
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu endereço">
            </div>
            <div class="form-group">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite seu endereço">
            </div>
            <div class="form-group">
              <label for="dataAgendamento">Data de Agendamento</label>
              <input type="date" class="form-control" name="dataAgendamento" id="dataAgendamento">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Adicione o link para o JavaScript do Bootstrap (opcional, apenas se precisar de funcionalidades específicas do Bootstrap que dependem de JavaScript) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
