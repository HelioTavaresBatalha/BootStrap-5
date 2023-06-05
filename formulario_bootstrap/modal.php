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
        <h1 class="mt-5 text-dark">Trabalhar com modal </h1>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-danger mt-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Principal conteúdo modal</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima velit, incidunt officiis expedita exercitationem, asperiores neque labore blanditiis perspiciatis doloremque nesciunt. Minus quod pariatur perspiciatis autem explicabo deleniti voluptatem libero!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima velit, incidunt officiis expedita exercitationem, asperiores neque labore blanditiis perspiciatis doloremque nesciunt. Minus quod pariatur perspiciatis autem explicabo deleniti voluptatem libero!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima velit, incidunt officiis expedita exercitationem, asperiores neque labore blanditiis perspiciatis doloremque nesciunt. Minus quod pariatur perspiciatis autem explicabo deleniti voluptatem libero!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Fechar</button>
                        <input type="submit" class="btn btn-success" value="concordar"></input>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5">Trabalhar com sroll na janela modal</h2>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-warning mt-5" data-bs-toggle="modal" data-bs-target="#exampleModalScrolling">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrolling" tabindex="-1" aria-labelledby="exampleModalScrollinglabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalScrolling">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima velit, incidunt officiis expedita exercitationem, asperiores neque labore blanditiis perspiciatis doloremque nesciunt. Minus quod pariatur perspiciatis autem explicabo deleniti voluptatem libero!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima velit, incidunt officiis expedita exercitationem, asperiores neque labore blanditiis perspiciatis doloremque nesciunt. Minus quod pariatur perspiciatis autem explicabo deleniti voluptatem libero!</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima velit, incidunt officiis expedita exercitationem, asperiores neque labore blanditiis perspiciatis doloremque nesciunt. Minus quod pariatur perspiciatis autem explicabo deleniti voluptatem libero!</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mt-5">Enviar conteúdo para janela modal </h2>

        <button type="button" class="btn btn-outline-primary mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nova messagem</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Assunto:</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Messagem:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script>
        const exampleModal = document.getElementById('exampleModal')
        if (exampleModal) {
            exampleModal.addEventListener('show.bs.modal', event => {
                // Button that triggered the modal
                const button = event.relatedTarget
                // Extract info from data-bs-* attributes
                const recipient = button.getAttribute('data-bs-whatever')
                // If necessary, you could initiate an Ajax request here
                // and then do the updating in a callback.

                // Update the modal's content.
                const modalTitle = exampleModal.querySelector('.modal-title')
                const modalBodyInput = exampleModal.querySelector('.modal-body input')

                modalTitle.textContent = `New message to ${recipient}`
                modalBodyInput.value = recipient
            })
        }
    </script>

</body>

</html>