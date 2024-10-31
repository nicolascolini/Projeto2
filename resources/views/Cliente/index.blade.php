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

     
    <div id="search-container">
        <input type="text" id="search" placeholder="Buscar Cliente...">
        <ul id="suggestions"></ul>
    </div>

     <div id="navegacao">
        <ul id="menu">
            <li><a href="/home">Home</a></li>
            <li><a href="/historia">História</a></li>
            <li><a href="/galeria">Galeria</a></li>
            <li><a href="/contato">Contato</a></li>
        </ul>
    </div>

    <div>
    {{ session(('mensagem')) }}
    <table>

        @foreach($clientes as $cliente)
        <tr>
            <td>Nome:</td>
            <td>{{ $cliente->nome }}</td>
        </tr>
        <tr>
            <td>CPF:</td>
            <td>{{ $cliente->cpf }}</td>
        </tr>
        <tr>
            <td>Telefone:</td>
            <td>{{ $cliente->telefone }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $cliente->email }}</td>
        </tr>
        <tr>
            <td colspan="2">
                <form action="deletarCliente/{{ $cliente->id }}" method="POST" onsubmit="return confirm('TEM CERTEZA?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </td>

            <td>
                <a href="editarCliente/{{$cliente->id}}">Editar</a>
            </td>
        </tr>
        @endforeach
    </table>
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

<script>
    const clientes = @json($clientes); // Converte os dados do Laravel para um formato que o JS pode usar.

    const searchInput = document.getElementById('search');
    const suggestionsList = document.getElementById('suggestions');

    // Função para filtrar e mostrar sugestões
    searchInput.addEventListener('input', function() {
        const query = searchInput.value.toLowerCase();
        suggestionsList.innerHTML = ''; // Limpa as sugestões

        if (query) {
            const filteredClientes = clientes.filter(cliente => 
                cliente.nome.toLowerCase().includes(query) || 
                cliente.cpf.includes(query) ||
                cliente.telefone.includes(query) ||
                cliente.email.toLowerCase().includes(query)
            );

            filteredClientes.forEach(cliente => {
                const li = document.createElement('li');
                li.textContent = `${cliente.nome} - ${cliente.cpf}`; // Ajuste a informação que deseja mostrar
                li.addEventListener('click', function() {
                    searchInput.value = cliente.nome; // Preenche o input com o nome do cliente
                    suggestionsList.innerHTML = ''; // Limpa as sugestões
                });
                suggestionsList.appendChild(li);
            });
        }
    });
</script>
</html>