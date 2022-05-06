@extends('template')
@section('titulo_pagina', 'Cliente')
@section('conteudo_principal')
        <div id="formulario">
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="inputEmail4">
                  </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="inputEmail4">
                  </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="inputEmail4">
                  </div>
               
                <div class="col-12">
                  <button type="submit" id="botao_adicionar" class="btn btn-primary">Adicionar</button>
                  <button type="submit"  class="btn btn-primary">Editar</button>
                  <button type="submit" id="botao_cancelar" class="btn btn-primary">Excluir</button>
                  
                </div>
              </form>
        </div>
        <div id="tabela">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Data Nasci</th>
                    <th scope="col">Endereço</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Marcos Silva</td>
                    <td>marcossilta@gmail.com</td>
                    <td>12345678911</td>
                    <td>10/05/1990</td>
                    <td>rua bem longe n 15</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
@endsection