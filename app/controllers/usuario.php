<?php

    require __DIR__."/../models/Usuario.php";


    function index(){
        $usuario = new Usuario();
        $usuarios = $usuario->getUsuarios();

        $teste = "Leonardão de Caprio";

        require __DIR__."/../views/usuario_listar.php";

    }

    function excluir(){
        echo "chamou o excluir";
    }

    if(isset($_GET['acao']) and function_exists($_GET['acao']) ){
        call_user_func($_GET['acao']);
    }else {
        index();
    }

