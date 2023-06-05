<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
    
        <div class="container">
        <h1 class="mb-4">Formúlario para cadastrar utilizadores</h1>
        <hr>
            <form action="">
                <div class="mb-3">
                    <label for="campo-email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="campo-email" aria-describedby="emailHelp" placeholder="Digite o seu melhor e-mail">
                    <div id="emailHelp" class="form-text">Necessário colocar um email válido.</div>
                </div>

                <div class="mb-3">
                    <label for="campoSenha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="campoSenha" placeholder="A senha deve ter no minimo 6 caracteres">
                </div>

                <div class="mb-3">
                    <label for="campoNome" class="form-label">Nome</label>
                    <input type="text" id="campoNome" class="form-control" placeholder="Digite o seu nome completo" value="Hélio Batalha" readonly>
                </div>

                <div class="mb-3">
                    <label for="campoNif" class="form-label">NIF</label>
                    <input type="text" id="campoNif" class="form-control" placeholder="Digite o seu número de identificação fiscal" value="264797400" readonly>
                </div>

                    <input type="submit" class="btn btn-outline-success" value="Cadastrar">
            </form>
        </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  </body>
</html>