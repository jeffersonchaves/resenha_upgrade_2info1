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

<div class="container mt-5">

    <h1>Editar usuário <?= $dadosUsuario['nome'] ?></h1>


    <form method="post" action="usuario.php?acao=update">

        <input type="hidden" name="id" value="<?= $_GET['id'] ?>" >

        <div class="form-group">
            <label for="nome">Nome</label>
            <input value="<?= $dadosUsuario['nome'] ?>" name="nome" type="text" class="form-control" id="nome" placeholder="digite seu nome">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input value="<?= $dadosUsuario['email'] ?>" name="email" type="email" class="form-control" id="email" placeholder="digite seu email">
        </div>

        <div class="form-group">
            <label for="senha">Senha</label>
            <input value="<?= $dadosUsuario['senha'] ?>" name="senha" type="password" class="form-control" id="senha" placeholder="digite sua senha">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


</div>

</body>
</html>