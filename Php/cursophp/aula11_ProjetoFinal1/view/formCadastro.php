<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../css/cssForm.css" />
</head>

<body>
  <section>
    <header>
      <h1>Cadastro cliente</h1>
    </header>

    <main>
      <div class="container">
        <form action="../controller/cadastrarClienteController.php" method="post">
          <input type="text" name="nome" id="nome" placeholder="Nome Completo" class="inpuut" />
          <input type="text" name="cpf" id="cpf" placeholder="Cpf" class="inpuut" />
          <input type="text" name="email" id="email" placeholder="Seu Email" class="inpuut" />

          <p>Sexo</p>
          <label for="">masculino</label>
          <input type="radio" name="sexo" id="masculino" value="m" />

          <label for="">feminino</label>
          <input type="radio" name="sexo" id="feminino" value="f" />

          <p>Data de Nascimento</p>
          <input type="date" name="datanasc" id="data" />

          <input type="submit" id="submit" value="Cadastrar" />
        </form>
      </div>
    </main>

    <footer></footer>
  </section>
</body>

</html>