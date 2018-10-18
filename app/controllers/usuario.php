<?php

    require "../models/Usuario.php";

    $usuario = new Usuario();
    $usuarios = $usuario->getUsuarios();

    print_r($usuarios);