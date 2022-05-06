<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="{{url('assents/estilos/estiloProduto.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav id="menulinks">
          <a href="http://127.0.0.1:5500/index.html"><button id="botaoSair">Página Inicial</button></a>
          <a href="http://127.0.0.1:5500/pgLogin.html"><button id="botaoSair">Sair</button></a>
        </nav>
    </header>

    <div id="conteiner">
        <div id="formulario">
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nome do Produto</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Fabricante</label>
                  <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Composição</label>
                  <input type="text" class="form-control" id="inputAddress2">
                </div>
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Contra indicação</label>
                  <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                  <label for="inputState" class="form-label">Tipo</label>
                  <select id="inputState" class="form-select">
                    <option selected>Selecionar</option>
                    <option>Remédio</option>
                    <option>Cosmético</option>
                    <option>Higiene</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Valor</label>
                  <input type="" class="form-control" id="inputZip">
                </div>
               
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
              </form>
        </div>
        <div id="tabela">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Quantidade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Vitamina C</td>
                    <td>Remédio</td>
                    <td>R$ 7,63</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Fralda Pampers M</td>
                    <td>Higiene</td>
                    <td>R$ 23,99</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Dipirona</td>
                    <td>Remédio</td>
                    <td>R$ 5,38</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Fralda Pampers G</td>
                    <td>Higiene</td>
                    <td>R$ 33,99</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Dorflex comprimidos</td>
                    <td>Remédio</td>
                    <td>R$ 5,39</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Doralgina</td>
                    <td>Remédio</td>
                    <td>R$ 2,50</td>
                    <td>6</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
    </div>
    
</body>
</html>