<?php 
require_once '../dto/funcionarioDTO.php';
require_once '../dao/funcionarioDAO.php';

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);
$perfil = $_POST['perfil'];
$sexo = $_POST['sexo'];
$datanasc = $_POST['datanasc'];


echo $usuario;
echo $senha;
echo $perfil;

$funcionarioDTO = new funcionarioDTO();
 $funcionarioDTO->setCpf($cpf);
 $funcionarioDTO->setNome($nome);
 $funcionarioDTO->setEmail($email);
 $funcionarioDTO->setUsuario($usuario);
 $funcionarioDTO->setSenha($senha);
 $funcionarioDTO->setPerfil($perfil);
 $funcionarioDTO->setSexo($sexo);
 $funcionarioDTO->setDatanasc($datanasc);


 $funcionarioDAO = new funcionarioDAO();
 $ok = $funcionarioDAO->cadastrarFuncionario($funcionarioDTO);

 if($ok){
     echo "<script>alert('Cadastro efetuado com sucesso!')</script>";
     header("Location: ../index.php");
 }
?>