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

    <div class="container conteudo-pg ">
        <h1 class="mt-3">List group</h1>
        <h2 class="text-success mt-4 text-center">Trabalhar com listas no Bootstrap</h2>

        <ul class="list-group mt-5 ">
            <li class="list-group-item" aria-current="true">An active item</li>
            <li class="list-group-item disabled " aria-disabled="true">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item active">And a fifth one</li>
        </ul>

        <h2 class="mt-5 text-center">Links and buttons</h2>

        <div class="list-group mt-3">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                The current link item
            </a>
            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
            <a class="list-group-item list-group-item-action disabled">A disabled link item</a>
        </div>

        <h2 class="mt-5 text-center"> The current link item</h2>

        <div class="list-group mt-5 ms-5 me-5">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                The current link item
            </a>
            <a href="#" class="list-group-item list-group-item-action">A second link item</a>
            <a href="#" class="list-group-item list-group-item-action">A third link item</a>
            <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
            <a class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
        </div>

        <h2 class="mt-5 text-center">Numbered List</h2>

        <ol class="list-group list-group-numbered mt-5 mb-5 ms-5 me-5">
            <li class="list-group-item">A list item</li>
            <li class="list-group-item">A list item</li>
            <li class="list-group-item">A list item</li>
        </ol>

        <h2 class="mt-5  text-center">Numbered List com notificações</h2>

        <ol class="list-group list-group-numbered mt-5 mb-5 ms-5 me-5">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                </div>
                <span class="badge bg-danger rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                </div>
                <span class="badge bg-warning rounded-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Subheading</div>
                    Content for list item
                </div>
                <span class="badge bg-success rounded-pill">14</span>
            </li>
        </ol>

        <h2 class="mt-5 text-center">List Variants colors</h2>

        <ul class="list-group mt-5 mb-5 ms-5 me-5">
            <li class="list-group-item">A simple default list group item</li>
            <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
            <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
            <li class="list-group-item list-group-item-success">A simple success list group item</li>
            <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
            <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
            <li class="list-group-item list-group-item-info">A simple info list group item</li>
            <li class="list-group-item list-group-item-light">A simple light list group item</li>
            <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
        </ul>

        <h2 class="mt-5 text-center">List Variants colors action</h2>

        <div class="list-group mt-5 mb-5 ms-5 me-5">
            <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>

            <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
        </div>

        <h2 class="mt-5 text-center">Lista com conteúdo custumizado</h2>

        <div class="list-group mt-5 mb-5 ms-5 me-5">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small>3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small>And some small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-body-secondary">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-body-secondary">And some muted small print.</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-body-secondary">3 days ago</small>
                </div>
                <p class="mb-1">Some placeholder content in a paragraph.</p>
                <small class="text-body-secondary">And some muted small print.</small>
            </a>
        </div>

        <h2 class="mt-5 text-center">List Checkboxes and radios </h2>

        <ul class="list-group mt-5 mb-5 ms-5 me-5">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                <label class="form-check-label" for="firstCheckbox">Habilitação A</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                <label class="form-check-label" for="secondCheckbox">Habilitação B</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                <label class="form-check-label" for="thirdCheckbox">Habilitação C</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="CheckboxD">
                <label class="form-check-label" for="CheckboxD">Habilitação D</label>
            </li>
            <li class="list-group-item">
                <input class="form-check-input me-1" type="checkbox" value="" id="CheckboxE">
                <label class="form-check-label" for="CheckboxE">Habilitação E </label>
            </li>
        </ul>


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