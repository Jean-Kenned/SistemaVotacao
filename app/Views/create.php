<!DOCTYPE html>
<html class="bg" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistema de Votação</title>

  <link rel="stylesheet" type="text/css" href="resources/css/painel.css">
  <link rel="stylesheet" type="text/css" href="resources/css/create.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="resources/js/create.js"></script>
</head>


<body class="bg-light">
  <div class="card ">
    <h5 class="card-header info-color text-center py-4 titlefont">
      Sistema de Votação
    </h5>
    <div class="container">
      <h2>Criar Nova Enquete</h2>
    </div>
  </div>
  <div class="container mt-5">
    <form name="formContact" method="POST" action="/create">
      <div class="form-group row">
        <div class="col-lg-5">
          <label for="titulo" class="labels">Título</label>
          <input class="form-control" type="text" name="titulo"  id="titulo" placeholder="Informe um título" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-3">
          <label class="labels" for="dataInicio">Data de Inicio</label>
          <input type="date" id="dataInicio" name="dataInicio" class="form-control" required>
        </div>
        <div class="col-lg-3">
          <label class="labels" for="dataTermino">Data de Término</label>
          <input type="date" id="dataTermino" name="dataTermino" class="form-control" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-3">
          <label class="labels" for="horaInicio">Hora de Inicio</label>
          <input type="time" id="horaInicio" name="horaInicio" class="form-control" required>
        </div>
        <div class="col-lg-3">
          <label class="labels" for="horaTermino">Hora de Término</label>
          <input type="time" id="horaTermino" name="horaTermino" class="form-control" required>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-3">
          <label class="labels" for="opcoes">Opções</label>
          <div id="opcaoList">
            <input type="text" id="opcao1" name="opcao1" class="form-control space-top" required>
            <input type="text" id="opcao2" name="opcao2" class="form-control space-top" required>
            <input type="text" id="opcao3" name="opcao3" class="form-control space-top" required>
            <input type="hidden" id="numberOptions" name="numberOptions" value="3">
          </div>
        </div>
        <a href="javascript:addOption()">Adicionar opção</a>
      </div>
      <button type="submit" class="btn btn-primary submitButton">Criar</button>
    </form>
  </div>
</body>

</html>