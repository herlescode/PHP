<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <h1>Lista de Diarias</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Data</th>
                <th scope="col">Tempo de Atendimento</th>
                <th scope="col">Diarista</th>
                <th scope="col">Cliente</th>
                </tr>
            </thead>
            <tbody>
                    <?php foreach($diarias as $diaria) : ?>
                        <tr>
                            <th scope="row"><?= $diaria->data?></th>
                            <td><?= $diaria->tempo ?></td>
                            <td><?= $diaria->diarista->nome ?></td>
                            <td><?= $diaria->cliente->nomeCompl ?></td>
                        </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
