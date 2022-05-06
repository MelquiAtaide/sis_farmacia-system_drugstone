<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="{{url('assents/estilos/index.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
      <nav>
        <div id="menu">
          <div class="row row-cols-1 row-cols-md-4 g-4">
              <div class="col" id="cardvenda">
                <div class="card">
                  <img src="{{url('assents/imagens/imgCarrinho.png')}}" class="card-img-top" alt="carrinho-de-compras"/>
                  <div class="card-body">
                    <h5 class="card-title">Venda</h5>
                  </div>
                </div>
              </div>
              <div class="col" id="cardestoque">
                  <div class="card">
                    <img src="{{url('assents/imagens/imgCarrinho-de-mao.png')}}" class="card-img-top" alt="..." height="150px"/>
                    <div class="card-body">
                      <h5 class="card-title">Estoque</h5>
                    </div>
                  </div>
                </div>
              <div class="col" id="cardcliente">
                <div class="card">
                  <img src="{{url('assents/imagens/imgCliente.png')}}" class="card-img-top" alt="..." height="150px"/>
                  <div class="card-body">
                    <h5 class="card-title">Cliente</h5>
                  </div>
                </div>
              </div>
              <div class="col" id="cardfornecedor">
                <div class="card">
                  <img src="{{url('assents/imagens/imgCaminhao.png')}}" class="card-img-top" alt="..." height="150px"/>
                  <div class="card-body">
                    <h5 class="card-title">Fornecedor</h5>
                  </div>
                </div>
              </div>
          </div>
          <a href="http://127.0.0.1:5500/pgLogin.html"><button id="botaoSair">Sair</button></a>
        </div>
      </nav>
    </header>
    <div id="imagemfundo">
        <img src="{{url('assents/imagens/farmacia-fundo01.jpg')}}" />
    </div>
    <footer>
        <table id="rodape">
            <tr>
                <td> 
                    <img src="{{url('assents/imagens/logoFarmaciaPopular.png')}}" width="100px"/>
                </td>

                <td>
                    <ul>
                        <li>(82) 9 9999-9999</li>
                        <li>(82) 9 8888-8888</li>
                        <li>E-mail: ataidefarma@gmail.com</li>
                    </ul>
                </td>
            </tr>
        </table>

    </footer>
    
</body>
</html>