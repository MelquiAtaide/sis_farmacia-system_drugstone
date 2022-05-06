<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo_pagina')</title>
    <link rel="stylesheet" href="{{url('assents/estilos/estiloVenda.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav id="menulinks">
          <a href="http://127.0.0.1:8000/index"><button>Página Inicial</button></a>
          <a href="http://127.0.0.1:8000/venda"><button>Venda</button></a>
          <a href="http://127.0.0.1:8000/estoque"><button>Estoque</button></a>
          <a href="http://127.0.0.1:8000/cliente"><button>Cliente</button></a>
          <a href="http://127.0.0.1:8000/fornecedor"><button>Fornecedor</button></a>
          <a href="http://127.0.0.1:8000/funcionario"><button>Funcionario</button></a>
          <a href="http://127.0.0.1:8000/login"><button>Sair</button></a>
        </nav>
    </header>
    <div id="conteiner">
        @yield('conteudo_principal')
        </div>
    
</body>
</html>