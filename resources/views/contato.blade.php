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
        </ul>
    </div>
    
    <div id="contato">
       <form action="#">
            <label>Nome:</label>
            <input class="form-control" type="text" name="nome">
            <label>Telefone:</label>
            <input class="form-control" type="tel" name="telefone">
            <label>E-mail</label>
            <input class="form-control" type="email" name="email">
            <label>Digite a sua mensagem:</label>
            <textarea class="form-control" name="mensagem" cols="30" rows="10"></textarea>
            <input class="btn btn-primary" type="submit"  value="Enviar">       
       </form>

       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14452.999928855523!2d-50.1695107!3d-25.0933979!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e81a1338c2ca9d%3A0x4dd4827f11995364!2sFaculdade%20Senac%20Ponta%20Grossa!5e0!3m2!1spt-PT!2sbr!4v1688080528159!5m2!1spt-PT!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div id="rodape">
          Cafeteria Vida Feliz<br>
          Rua Ivo Leão, 71, Alto da Glória, Curitiba, PR <br>
          Telefone: (42) 98785-9233<br>
          Whatsapp: (42) 98785-9233<br>
          E-mail: vidafeliz@gmail.com<br>
          <a href="https://youtube.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/09/youtube-play-icone.png"></a>
          <a href="https://facebook.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/09/facebook-icone-icon.png"></a>
          <a href="https://instagram.com"><img class="icones" src="https://imagepng.org/wp-content/uploads/2017/08/instagram-icone-icon-1.png"></a>
    </div>
</body>
</html>