<?php

class Conexao
{
    function getConexao()
    {
        $banco = new mysqli("localhost", "root", "", "form");
        return $banco;
        if ($banco->connect_errno) {
            echo "ERRO " + $banco->error;
        }
    }
}
