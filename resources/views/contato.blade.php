<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Contato</title>
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
            <li><a href="/cadastrarCliente"> Cadastro </a></li>
        </ul>
    </div>
    
    <div id="contato">
    <form action="#">
        <label>Nome:</label>
        <input class="form-control" type="text" name="nome">
        <label>Telefone:</label>
        <input class="form-control" type="tel" name="telefone">
        <label>E-mail:</label>
        <input class="form-control" type="email" name="email">
        <label>Digite a sua mensagem:</label>
        <textarea class="form-control" name="mensagem" cols="30" rows="10"></textarea>
        <input class="btn btn-primary" type="submit" value="Enviar">
    </form>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.6046408972607!2d-49.26706792370584!3d-25.418041432420434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce418054cfc49%3A0x8efc2ccbaf001fde!2sR.%20Ivo%20Le%C3%A3o%2C%20460%20-%20Alto%20da%20Gl%C3%B3ria%2C%20Curitiba%20-%20PR%2C%2080030-180!5e0!3m2!1spt-BR!2sbr!4v1727356056029!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

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