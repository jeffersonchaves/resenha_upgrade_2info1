<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>
<body>

    <div class="container">

        <h1>Hello, <?= $teste?>!  </h1>


        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nome</th>
                <th scope="col">email</th>
                <th scope="col">opções</th>
            </tr>
            </thead>
            <tbody>

                <?php foreach ($usuarios as $usuario): ?>
                <tr>
                    <th scope="row"><?= $usuario['id'] ?></th>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td>???</td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>


    </div>

</body>
</html>