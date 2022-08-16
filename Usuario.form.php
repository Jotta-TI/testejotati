<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Formulário de cadastro de usuário</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container mt-3">
            <h2> Formulário de cadastro de usuário </h2>
            <form name="formusuario" action="Usuario.php" method="post">
                <label for='id_tipo_usuario'>id Tipo de Usuário: </label>
                <input type='number' class='form-control' id='data' placeholder='id_tipo_usuario' name="id_tipo_usuario">
                <label for='name'>name: </label>
                <input type='text' class='form-control' id='data' placeholder='nome' name="nome">
                <label for='prontuario'>Prontuário: </label>
                <input type='text' class='form-control' id='data' placeholder='prontuario' name="prontuario">
                <label for='senha'>senha: </label>
                <input type='text' class='form-control' id='data' placeholder='senha' name="senha">
                <label for='senha'>Corpo Acadêmico: </label>
                <input type='text' class='form-control' id='data' placeholder='corpo academico' name="corpo_academico">
                
                <input type="submit" class="form-bottom" name="enviar">
    </form>
        </div>
      
    </body>
</html>