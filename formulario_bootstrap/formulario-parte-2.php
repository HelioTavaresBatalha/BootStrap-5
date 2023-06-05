<!doctype html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>

  <body>
    
        <div class="container">

            <h1>Cadastrar mensagens de contatos</h1>
            <hr>
            <form action="">
          
            <div class="mb-3">
                <label for="campoEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="campoEmail" placeholder="Digite o seu nome">
            </div>

            <div class="mb-3">
                <label for="campoEmail" class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" id="campoEmail" placeholder="Digite o seu nome">
            </div>

            <div class="mb-3">
                <label for="campoEmail" class="form-label">Email</label>
                <input type="email" class="form-control form-control-sm" id="campoEmail" placeholder="Digite o seu nome">
            </div>

            <div class="mb-3">
                <label for="campoEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="campoEmail" placeholder="Digite o seu nome">
            </div>

            <div class="mb-3">
                <label for="campoTextarea" class="form-label">Escreva a sua mensagem</label>
                <textarea class="form-control" id="campoTextarea" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="carregarFicheiros" class="form-label">Carrega o seu curriculo carregado</label>
                <input class="form-control" type="file" id="carregarFicheiros">
            </div>

            <div class="mb-3">
                <label for="alterarCor" class="form-label">Alterecor a </label>
                <input type="color" class="form-control form-control-color" id="alterarCor" value="#563d7c" title="Selecione a cor">

            </div>

            <div class="mb-3">

            <label for="campoCidade" class="form-label">Cidade
            <input class="form-control" list="listCidade" id="campoCidade" placeholder="Selecione a cidade...">
            <datalist id="listCidade">
            <option value="San Francisco">
            <option value="New York">
            <option value="Seattle">
            <option value="Los Angeles">
            <option value="Chicago">
            </datalist>

            </div>
            <div class="mb-3">
            <label for="campoEstados" class="form-label">Estados</label>
                <select class="form-select" id="campoEstados" aria-label="Selecione o Estado">
                    <option selected>Selecione o seu estado</option>
                    <option value="1">Lisboa</option>
                    <option value="2">Porto</option>
                    <option value="3">Setúbal</option>
                </select>
            </div>

            <div class="mb-3">
            <label for="Estados" class="form-label">Estados</label> 
            <select class="form-select" id="Estados" multiple aria-label="multiplo select">
                <option selected>Selecione o seu estado</option>
                <option value="1">Lisboa</option>
                <option value="2">Porto</option>
                <option value="3">Setúbal</option>
            </select>

            </div>
            </form>
            
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  </body>
</html>