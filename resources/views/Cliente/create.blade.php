<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Cadastro de Cliente</title>
</head>
<body>
    <div id="cabecalho">
        <img id="logo" src="img/logo.png" alt="Logo da Confeitaria">
     </div>

     <div id="navegacao">
        <ul id="menu">
            <li><a href="/home">Home</a></li>
            <li><a href="/historia">História</a></li>
            <li><a href="/galeria">Galeria</a></li>
            <li><a href="/contato">Contato</a></li>
        </ul>
    </div>

<form action="cadastrarCliente" method="post">
@csrf
 {{session('mensagem')}}
<p>Nome: <input type="text" name="nome"></p>
<p>CPF: <input type="text" name="cpf"></p>
<p>Telefone: <input type="text" name="telefone"></p>
<p>Email: <input type="text" name="email"></p>
<input type="submit" value="Cadastrar">
</form>

<a href="read">Listar Clientes</a>


    <div id="rodape">
          Cafeteria Vida Feliz<br>
          Rua Ivo Leão, 460, Alto da Glória, Curitiba, PR <br>
          Telefone: (42) 98785-9233<br>
          Whatsapp: (42) 98785-9233<br>
          E-mail: vidafeliz@gmail.com<br>
          <a href="https://youtube.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/09/youtube-play-icone.png"></a>
          <a href="https://facebook.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/09/facebook-icone-icon.png"></a>
          <a href="https://instagram.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/08/instagram-icone-icon-1.png"></a>
    </div>
</body>
</html>