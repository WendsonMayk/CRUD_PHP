<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Error 404 - Página não encontrada</title>
  <!-- Adicione o link para o CSS do Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .alert-big {
      font-size: 2rem;
      padding: 2rem;
    }

    @keyframes pulse {
      0% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.05);
      }
      100% {
        transform: scale(1);
      }
    }

    .alert-big.animated {
      animation: pulse 1s infinite;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="alert alert-danger alert-big animated" role="alert">
    <h4 class="alert-heading">Erro 404 - Página não encontrada!</h4>
    <p>A página que você está tentando acessar não foi encontrada.</p>
    <hr>
    <p class="mb-0">Por favor, verifique o URL e tente novamente.</p>
  </div>
</div>

<!-- Adicione o link para o JavaScript do Bootstrap (opcional, apenas se precisar de funcionalidades específicas do Bootstrap que dependem de JavaScript) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
