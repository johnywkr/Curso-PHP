<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/styleForm.css">
</head>
<body>
    
    <header>
        Cadastro de Funcionario
    </header>

    <main>
        <div class="container">
            <h1>Cadastro</h1>
            <form action="../controller/cadastrarFuncionarioController.php" method="POST">

                <input type="text" name="cpf" id="cpf" placeholder="CPF" class="inpuut">
                <br> <br>
                
                <input type="text" name="nome" id="nome" placeholder="Nome completo" class="inpuut">
                <br> <br>
                
                <input type="email" name="email" id="email" placeholder="Seu melhor email" class="inpuut">

                <br> <br>

                <input type="text" name="usuario" id="usuario" placeholder="Seu nome de Usuario" class="inpuut">
                
                <br> <br>

                <input type="password" name="senha" id="senha" placeholder="Sua senha" class="inpuut">

                <select name="perfil">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionario</option>
                </select>


                <p>Sexo</p>

                <label>Masculino</label>
                <input type="radio" name="sexo" id="masculino" value="M">

                <label>Feminino</label>
                <input type="radio" name="sexo" id="feminino" value="F">
                <br>
                <br>

                <div>
                Data de nascimento
                <input type="date" name="datanasc" id="data" class="inpuut">
                </div>

                <input type="submit" value="Cadastrar" id="submit" class="inpuut">
                
            </form>
        </div>
        
    </main>


    <footer>

    </footer>
</body>
</html>