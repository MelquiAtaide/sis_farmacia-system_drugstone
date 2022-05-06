@extends('template')
@section('titulo_pagina', 'Estoque')
@section('conteudo_principal')
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
                    <th scope="col">Fabricante</th>
                    <th scope="col">Contra indicação</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Quantidade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Vitamix C 20ml</td>
                    <td>vitaLab</td>
                    <td>dengue e gestantes</td>
                    <td>Remédio</td>
                    <td>R$ 7,63</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Fralda Pampers M</td>
                    <td>Pampers</td>
                    <td>não</td>
                    <td>Higiene</td>
                    <td>R$ 23,99</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Dipirona</td>
                    <td>vitaLab</td>
                    <td>dengue e gestantes</td>
                    <td>Remédio</td>
                    <td>R$ 5,38</td>
                    <td>15</td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Fralda Pampers G</td>
                    <td>Pampers</td>
                    <td>não</td>
                    <td>Higiene</td>
                    <td>R$ 33,99</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Dorflex comprimidos</td>
                    <td>vitaLab</td>
                    <td>dengue e gestantes</td>
                    <td>Remédio</td>
                    <td>R$ 5,39</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Doralgina</td>
                    <td>vitaLab</td>
                    <td>dengue e gestantes</td>
                    <td>Remédio</td>
                    <td>R$ 2,50</td>
                    <td>6</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
@endsection