<!DOCTYPE html>
<html>

<head>
    <title>CRUD de Usuários</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Cadastro de Usuário</h2>
        <form action="/action_page.php">
            <div class="mb-3 mt-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="email@email.com" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd">Nome:</label>
                <input type="text" class="form-control" id="name" placeholder="Nome completo" name="pswd">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>