<?php

    require __DIR__."/../models/Usuario.php";


    function index(){
        $usuario = new Usuario();
        $usuarios = $usuario->getUsuarios();

        $teste = "Leonardão de Caprio";

        require __DIR__."/../views/usuario_listar.php";
    }

    function cadastrar(){
        require __DIR__."/../views/usuario_cadastrar.php";
    }

    function create(){
        //print_r($_POST);

        $nome  = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario = new Usuario();
        $usuario->create($nome, $email, $senha);

        index();

    }

    function excluir(){
        echo "chamou o excluir";
    }

    //Gerenciador de ROTAS
    if(isset($_GET['acao']) and function_exists($_GET['acao']) ){
        call_user_func($_GET['acao']);
    }else {
        index();
    }

