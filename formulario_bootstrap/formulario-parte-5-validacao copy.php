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
        <h2>Validação do Formulério</h2>
        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4">
                <label for="nome_utilizador" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome_utilizador" placeholder="Nome completo" required>

                <!----------------------validation--------------------------->
                <div class="valid-feedback">
                    Campo preenchido!
                </div>

                <div class="invalid-feedback">
                    Erro: Necessário preencher o Campo nome
                </div>

            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Apelido</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Apelido" required>
                <div class="valid-feedback">
                    Campo preenchido!
                </div>

                <div class="invalid-feedback">
                    Erro: Necessário preencher o Campo apelido
                </div>
            </div>

            <div class="col-md-4">
                <label for="utilizador" class="form-label">Utilizador</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputUtilizador">@</span>
                    <input type="text" class="form-control" id="utilizador" aria-describedby="inputGroupPrepend" placeholder="Nome do utilizador" required>

                    <div class="valid-feedback">
                        Campo preenchido!
                    </div>
                    <div class="invalid-feedback">
                        Erro: Necessário preencher o Campo utilizador
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <label for="cidade_utilizador" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade_utilizador" placeholder="Cidade" required>
                <div class="valid-feedback">
                    Campo preenchido!
                </div>
                <div class="invalid-feedback">
                    Erro: Necessário preencher o Campo Cidade
                </div>
            </div>
            <div class="col-md-3">
                <label for="estado_utilizador" class="form-label">Estado</label>
                <select class="form-select" id="estado_utilizador" required>
                    <option selected value="">Selecione...</option>
                    <option>Lisboa</option>
                    <option>Porto</option>
                    <option>Setúbal</option>
                    <option>Região norte</option>
                    <option>Algarve</option>
                </select>
                <div class="valid-feedback">
                    Campo preenchido!
                </div>
                <div class="invalid-feedback">
                    Erro: Necessário preencher o Campo estado
                </div>
            </div>
            <div class="col-md-3">
                <label for="codigo_postal" class="form-label">Código postal</label>
                <input type="number" class="form-control" id="codigo_postal" placeholder="Código postal" required>
                <div class="valid-feedback">
                    Campo preenchido!
                </div>
                <div class="invalid-feedback">
                    Erro: Necessário preencher o Campo Código postal
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-outline-success" type="submit">Cadastrar</button>
            </div>
        </form>
        <!---------------------!new form---------------------->

        <h2>Validação do Formulário utilizando tooltips</h2>

        <form class="row g-3 needs-validation" novalidate>
            <div class="col-md-4 position-relative">

                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome completo" required>

                <div class="valid-tooltip">
                    Campo preenchido!
                </div>

                <div class="invalid-tooltip">
                    Erro: Necessário preencher o campo nome
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="E-mail" required>

                <div class="valid-tooltip">
                    Campo preenchido!
                </div>

                <div class="invalid-tooltip">
                    Erro: Necessário preencher o campo apelido
                </div>
            </div>
            <div class="col-md-4 position-relative">
                <label for="username" class="form-label">Utilizador</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                    <input type="text" class="form-control" id="username" aria-describedby="validationTooltipUsernamePrepend" placeholder="Nome utilizador" required>
                    <div class="valid-tooltip">
                        Campo preenchido!
                    </div>

                    <div class="invalid-tooltip">
                        Erro: Necessário preencher o campo utilizador
                    </div>
                </div>
            </div>
            <div class="col-md-6 position-relative">
                <label for="validationTooltip03" class="form-label">City</label>
                <input type="text" class="form-control" id="validationTooltip03" required>
                <div class="invalid-tooltip">
                    Please provide a valid city.
                </div>
            </div>
            <div class="col-md-3 position-relative">
                <label for="validationTooltip04" class="form-label">State</label>
                <select class="form-select" id="validationTooltip04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>...</option>
                </select>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
            </div>
            <div class="col-md-3 position-relative">
                <label for="validationTooltip05" class="form-label">Zip</label>
                <input type="text" class="form-control" id="validationTooltip05" required>
                <div class="invalid-tooltip">
                    Please provide a valid zip.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-outline-success" type="submit">Cadastrar</button>
            </div>
        </form>







    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <script>
        (function() {

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>

</body>

</html>