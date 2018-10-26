<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 21/09/2018
 * Time: 08:57
 */

require __DIR__.'/../connection/Connection.php';

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

    public function create($nome, $email, $senha){

        $sql = "insert into usuarios (nome, email, senha) values ('$nome', '$email', '$senha')";
        $resultado = $this->conexao->exec($sql);

        return $resultado;
    }

    public function delete($id){

        $sql = "DELETE FROM usuarios WHERE id=$id";
        $this->conexao->exec($sql);
    }
}

//$usuario = new Usuario();
//$usuario->delete(1);



