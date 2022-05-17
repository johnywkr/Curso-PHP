
<?php
require_once "../dto/clienteDTO.php";
require_once "../dao/clienteDAO.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$datanasc = $_POST['datanasc'];
$sexo = $_POST['sexo'];

var_dump($_POST['nome'], ['cpf'], ['email'], ['datanasc'], ['sexo']);

$clienteDTO = new ClienteDTO();
$clienteDTO->setNome($nome);
$clienteDTO->setCpf($cpf);
$clienteDTO->setEmail($email);
$clienteDTO->getDatanasc($datanasc);
$clienteDTO->setSexo($sexo);

$clienteDAO = new clienteDAO();
$ok = $clienteDAO->cadastrarCliente($clienteDTO);

if ($ok) {
    echo "<script> alert('Cadastrado com sucesso!') 
        window.location = '../view/listaCliente.php'
    </script>";
}

//var_dump($_POST['nome']);

?>
