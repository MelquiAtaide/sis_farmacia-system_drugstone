<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo_pagina')</title>
    <link rel="stylesheet" href="{{url('assents/estilos/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    <header>
        <nav id="navbar">
            <img src="{{url('assents/imagens/logo-farmacia.jpg')}}" width="70px" />
            <ul>
                <li><a href="{{url('index')}}"><button>Início</button></a></li>
                <li><a href="{{url('venda')}}"><button>Venda</button></a></li>
                <li><a href="{{url('estoque')}}"><button>Estoque</button></a></li>
                <li><a href="{{url('cliente')}}"><button>Cliente</button></a></li>
                <li><a href="{{url('fornecedor')}}"><button>Fornecedor</button></a></li>
                <li><a href="{{url('funcionario')}}"><button>Funcionario</button></a></li>
            </ul>
          <div id="usuario">
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{session('usuario')}}
                </a>
              
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="{{route('logout')}}">Sair</a>
                </div>
              </div>
          </div>

        </nav>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </header>
    <div id="conteiner">
        @yield('conteudo_principal')
        </div>
    
</body>
</html>