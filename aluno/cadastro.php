<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form method="GET" action="crudaluno.php">
    <div class="container">
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for=""> ALUNO</label>
                        <input type="text" name="nome">
                    </div>

                    <div class="input-box">
                        <label for="">IDADE</label>
                        <input type="text" name="idade">
                    </div>
                    <div class="input-box">
                        <label for="">DATA DE NASCIMENTO</label>
                        <input type="date" name="nascimento">
                    </div>

                    <div class="input-box">
                        <label for="">ENDEREÇO</label>
                        <input type="text" name="endereco">
                    </div>

                    <div class="input-box">
                        <label for="">ESTATUS</label>
                        <input type="text" name="estatus">
                    </div>


                    <div class="input-box">
                        <label for="">MATRICULA</label>
                        <input type="text" name="matricula">
                    </div>

                    <div class="input-box">
                        <label for="">id do aluno</label>
                        <input type="number" name="idaluno">
                    </div>


                </div>

                <div class="login-button">
                    <input type="submit" name="cadastrar" value="cadastrar">
                </div>
            </form>


        </div>
    </div>
</form> 

<div class="voltar-button">
    <button class="button"><a href="index(4).php">voltar</a></button>
</div>
</body>

</html>