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

                </div>
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Valor</label>
                  <input type="" class="form-control" id="inputZip">
                </div>

                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Quantidade</label>
                  <input type="number" class="form-control" id="inputZip">
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
                  @foreach ($produtos as $produto)
                  <tr>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->fabricante}}</td>
                    <td>{{$produto->contraIndi}}</td>
                    <td>{{$produto->categoria->categoria}}</td>
                    <td>{{$produto->Valor}}</td>
                    <td>{{$produto->quantidade}}</td>
                    <td>
                      <a href="{{route('produtos.edicao', ['id' => $produto->id])}}">Editar</a>
                      <a href="{{route('produtos.excluir', ['id' => $produto->id])}}">Excluir</a>
                    </td>
                  </tr>	
                  @endforeach	
                </tbody>
              </table>
        </div>
@endsection