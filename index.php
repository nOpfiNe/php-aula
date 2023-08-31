<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>

    <!--Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Formulario de contato</h1>

        <form action="dados.php" method="POST">
            <div class="mb-3">
                <label for="idNome" class="form-label">Nome</label>
                <input type="text" name="campoNome" placeholder="Digite..." id="idNome" class="form-control">
            </div>
            <div class="mb-3">
                <label for="idEmail" class="form-label">Email</label>
                <input type="email" name="campoEmail" placeholder="name@example.com" class="form-control" id="idEmail">
            </div>
            <div class="mb-3">
                <label for="idAssunto" class="form-label">Assunto</label>
                <input name="campoAssunto" class="form-control" id="idAssunto"></input>
            </div>

            <div class="mb-3">
                <label for="idMsg" class="form-label">Mensagem</label>
                <textarea name="campoMsg" class="form-control" id="idMsg" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-outline-warning">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>