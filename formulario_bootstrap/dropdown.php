<!doctype html>
<html lang="pt-pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>

    <div class="container conteudo-pg">
        <h1 class="mt-5 text-dark">Trabalhar com Dropdown</h1>

        <div class="dropdown mt-5">
            <button class="btn btn-success btn-md dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenu">
                Dropdown button
            </button>

            <ul class="dropdown-menu" aria-describedby="dropdownMenu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>




        <!-- Example split danger button -->
        <div class="btn-group mt-5">
            <button type="button" class="btn btn-danger">Action</button>
            <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Separated link</a></li>
            </ul>
        </div>

        <!-- Default dropup button -->
        <div class="btn-group dropup mt-5">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Dropup
            </button>
            <ul class="dropdown-menu">
                <!-- Dropdown menu links -->
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Action two</a></li>
                <li><a class="dropdown-item" href="#">Action three</a></li>
            </ul>
            </ul>
        </div>

        <!-- Default dropstart button -->
        <div class="btn-group dropstart mt-5">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Dropstart
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Action two</a></li>
                <li><a class="dropdown-item" href="#">Action three</a></li>
            </ul>
        </div>

        <!-- Split dropstart button -->
        <div class="btn-group dropstart mt-5">
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Toggle Dropstart</span>
            </button>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Action two</a></li>
                <li><a class="dropdown-item" href="#">Action three</a></li>
            </ul>
            <button type="button" class="btn btn-secondary">
                Split dropstart
            </button>

            
        </div>

        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>

</html>