<?php 
    require_once 'conexao/Conexao.php';
    class funcionarioDAO{


        function cadastrarFuncionario(funcionarioDTO $funcionarioDTO){
            try {
                $cpf = $funcionarioDTO->getCpf();
                $nome = $funcionarioDTO->getNome();
                $email = $funcionarioDTO->getEmail();
                $usuario = $funcionarioDTO->getUsuario();
                $senha = $funcionarioDTO->getSenha();
                $perfil = $funcionarioDTO->getPerfil();
                $sexo = $funcionarioDTO->getSexo();
                $datanasc = $funcionarioDTO->getDatanasc();

                $bd = new Conexao();
                $conexao = $bd->getConexao();

                $sql1 = $conexao->prepare("insert into usuario(user,pass,perfil_idperfil) values (?, ?, ?);");
                $sql1->bind_param('ssi',$usuario,$senha,$perfil);

                $sql1->execute();

                $ultimoID = $conexao->insert_id;

                $sql2 = $conexao->prepare("insert into funcionario values(?, ?, ?, ?, ?, ?)");
                $sql2->bind_param('ssssii',$cpf,$nome,$email,$sexo,$datanasc,$ultimoID);
                $return =  $sql2->execute();
                return $return;
        
            } catch (mysqli_sql_exception $e) {
                $erro = $e->getMessage();
                echo $erro;
            }
        }
            
            

    }


?>