<!doctype html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h2 class="mb-3">Check Box</h2>
        <form action="">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="cnh_a">
                <label class="form-check-label" for="cnh_a">
                    Habilitação A
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="cnh_b">
                <label class="form-check-label" for="cnh_b">
                    Habilitação B
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="cnh_c" checked disabled>
                <label class="form-check-label" for="cnh_c">
                    Habilitação C
                </label>
            </div>
            <hr>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="turma1">
                    <label class="form-check-label" for="turma1">
                        Turma 1
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="turma2">
                    <label class="form-check-label" for="turma2">
                        Turma 2
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="turma3" checked disabled>
                    <label class="form-check-label" for="turma3">
                        Turma 3
                    </label>
                </div>
                <hr>
                <h2>Switches</h2>
                <div class="mb-3">

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="ativo">
                        <label class="form-check-label" for="ativo">Ativo</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="liberado" checked>
                        <label class="form-check-label" for="liberado">Liberado</label>
                    </div>

                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled>
                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked disabled>
                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled checked switch checkbox input</label>
                    </div>

                </div>

                <hr>

                <div class="mb-3">
                    <h2>Controlo Deslizante</h2>

                    <label for="volume" class="form-label">Volume</label>
                    <input type="range" class="form-range" id="volume">
                </div>

                <hr>

                <h2>Grupo de Campos</h2>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="email_utilizador">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="email_utilizador">
                </div>

            </div>

        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>