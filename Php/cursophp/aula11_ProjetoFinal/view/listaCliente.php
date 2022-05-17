<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    require_once "../dao/clienteDAO.php";
    $clienteDAO = new clienteDAO();
    $clientes = $clienteDAO->getListaCliente();

    ?>
    <a href="../index.html">Inicio</a>

    <table border="1">
        <tr>
            <td>CPF</td>
            <td>NOME</td>
            <td>Email</td>
            <td>Sexo</td>
            <td>Data de Nascimento</td>
        </tr>

        <?php
        foreach ($clientes as $cliente) {
            echo "<tr>";
            echo "<td>{$cliente['cpf']}</td>";
            echo "<td>{$cliente['nome']}</td>";
            echo "<td>{$cliente['email']}</td>";
            echo "<td>{$cliente['sexo']}</td>";
            echo "<td>{$cliente['datanasc']}</td>";
            echo " </tr> ";
        }


        ?>
    </table>
</body>

</html>