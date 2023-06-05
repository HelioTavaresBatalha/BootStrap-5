<!doctype html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <div class="container conteudo-pg">
        <h2 class="mb-5">Formulário de Cadastro</h2>
        <div class="mb-3">
            <label for="nome_utilizador" class="form-label">Nome completo</label>
            <input type="text" class="form-control" id="nome_utilizador" placeholder="Digite o seu nome completo">
        </div>

        <div class="mb-3">
            <label for="email_utilizador" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email_utilizador" placeholder="Digite o seu email">
        </div>

        <hr>
        <h2>Formulário para cadastrar utilizador</h2>

        <form class="row g-3">
            <div class="col-12">
                <label for="inputNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="inputNome" placeholder="Digite o seu nome completo">
            </div>

            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>

            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Senha</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>

            <div class="col-12">
                <label for="inputAddress" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Endereço Opcional</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Estado</label>
                <select id="inputState" class="form-select">
                    <option selected>Selecione o distrito</option>
                    <option>Lx</option>
                    <option>PO</option>
                    <option>ST</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputNif" class="form-label">NIF</label>
                <input type="text" class="form-control" id="inputNif">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
            </div>

            <hr>
        </form>
        <h2>Formulário Horizontal</h2>
        <form action="">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3">
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>