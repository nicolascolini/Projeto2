<html>

<head>
    <title>teste</title>
</head>

<body>
    <h1>testeeeeee</h1>

    @php
    
$clientes = array("João", "Pedro", "Lucas");
    @endphp
    
@if (count($clientes) == 0)
<p> não há clientes cadastrados</p>
@elseif (count($clientes) == 1)
<p> há 1 clientes cadastrado</p>
@else

<p>foram encontrados {{ count($clientes) }}  clientes cadastrados </p>
@endif


@for ($i=0;$i< 5;$i++)
<img src="\img\logo.png" height="70" width="70">
@endfor


@php

$listaclientes = array("João", "Pedro", "Lucas");
$i = 0;
@endphp

@while ($i < count($listaclientes))
{{ $listaclientes[$i]   }}
@php
$i++;
@endphp
@endwhile

@forelse ($clientes as $cliente)
<p> {{ $cliente}} </p>
@empty
<p>não existe usuário</p>
@endforelse
</body>


</html>