<?php 
require_once '../dto/clienteDTO.php';
class clienteDAO{

    function cadastrarCliente(clienteDTO $clienteDTO){
        $nome = $clienteDTO->getNome();
        $cpf = $clienteDTO->getCpf();
        $email = $clienteDTO->getEmail();
        $sexo = $clienteDTO->getSexo();
        $datanasc = $clienteDTO->getDatanasc();

        // Criando comunicaçao com o Banco de dados

        $banco = new mysqli('localhost','root','','projetoPhp');
        $sql = $banco->query("insert into cliente value ('$cpf', '$nome','$email', '$sexo','$datanasc');");
        return $sql;
        if(!$sql){
            $msg = $banco->error;
            echo $msg;
        }
        

    }

}