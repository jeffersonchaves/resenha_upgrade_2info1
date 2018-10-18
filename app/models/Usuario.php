<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 21/09/2018
 * Time: 08:57
 */

require '../connection/Connection.php';

class Usuario {

    //ATRIBUTOS
    public $id;
    public $nome;
    public $email;
    public $senha;
    public $tipoUsuario; //1 para comum, 2 para admin

    public $conexao;

    //COMPORTAMENTOS

    public function __construct() {
        $this->conexao = new Connection();
        $this->conexao = $this->conexao->getConnection();
    }

    public function getUsuarios() {

        $listaUsuario = $this->conexao->query("select * from usuarios")->fetchAll();
        return $listaUsuario;
    }
}

//$usuario1 = new Usuario();
//$usuario1->nome = "Jefferson Chaves";
//$usuario1->email = "jefferson.email@ifc.edu.br";
//$usuario1->exibe();
//
//echo "<br>";
//$usuario2 = new Usuario();
//$usuario2->nome = "Leonardo Chaves";
//$usuario2->email = "leonardo@gmail.com";



