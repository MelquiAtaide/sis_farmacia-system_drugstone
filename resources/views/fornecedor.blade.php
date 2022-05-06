@extends('template')
@section('titulo_pagina', 'fornecedor')
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
                    <label for="inputEmail4" class="form-label">CNPJ/CPF</label>
                    <input type="text" class="form-control" id="inputEmail4">
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
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Endereço</label>
                    <input type="text" class="form-control" id="inputEmail4">
                  </div>
               
                <div class="col-12">
                  <button type="submit" id="botao_adicionar" class="btn btn-primary">Adicionar</button>
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
                    <th scope="col">CNPJ</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Endereço</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>PharmaLab</td>
                    <td>pharmalab@hotmail.com</td>
                    <td>3331479641</td>
                    <td>Remédio</td>
                    <td>Rua da luz 157</td>
                  </tr>
                  
                </tbody>
              </table>
        </div>
@endsection