<!DOCTYPE html>
<html class="bg" lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sistema de Votação</title>
  <link rel="stylesheet" type="text/css" href="resources/css/painel.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<script>
  function changeView(view) {
    window.location.href = view
  }
</script>

<body class="bg-light">
  <div class="card ">
    <h5 class="card-header info-color text-center py-4 titlefont">
      Sistema de Votação
    </h5>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <table class="table table-hover ">
            <thead>
              <tr>
                <th scope="col">Título</th>
                <th scope="col">Início</th>
                <th scope="col">Término</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($enquetes as $enquete) {
              ?>
                <tr>
                  <th scope="row"><?php echo $enquete->getTitulo() ?></th>
                  <td><?php echo $enquete->getDataInicio() ?> </td>
                  <td><?php echo $enquete->getDataTermino() ?></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      <button type="button" onClick="changeView('create')" class="btn btn-primary">Adicionar Enquete</button>
    </div>

  </div>
  </div>

</body>

</html>