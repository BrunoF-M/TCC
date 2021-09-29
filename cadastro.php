<html>
    <head>
        
    </head>
    <body>
        <a href="view/tela1.php"> Ir para tela</a>
        <fieldset>
            <h1>Cadastro Usuario</h1>
            <form action="controller/inserir-usuario.php" method="POST">
                nome:
                <input type="text" name="nome" /> <br>
                login:
                <input type="text" name="login" /> <br>
                senha:
                <input type="text" name="senha" /> <br>
                <input type="submit" />
            </form>