<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    *{
        margin: 0;
        padding: 0;
        font-family:'Ubuntu' , sans-serif;
    }

    body{
        background: #211D4F;
    }

    form{
      padding: 50px;
    display: flex;
    flex-direction: column;
    align-content: center;
    justify-content: center;
    align-items: center;
    color: white;
    }

    form input{
        height: 15px;
        padding: 3px;
        border-radius: 8px;
        border: 1px solid black;
        outline: none;
    }

    form button{
        height: 30px;
        width: 55px;
        border: 1px solid black;
        background: #1493DD;
        color: white;
        border-radius: 8px;
        cursor: pointer;
    }
</style>
<body>
    <form action="foo.php" method="post">
        Nome: <input type="text" name="nome"><br>
        <br>
        Email: <input type="email" name="email"><br>
        <br>
        Senha: <input type="password" name="senha"><br>
        <br>
        Data de Nascimento:<br> <input type="date" name="data"><br>
        <br>
        Cpf: <input type="number" name="cpf"><br>
        <br>
        Endereço: <input type="text" name="endereco"><br>
        <br>
        Sexo: <input type="text" name="genero"><br>
        <br>
    
        <button type="submit">register</button>
    </form>
</body>
</html>