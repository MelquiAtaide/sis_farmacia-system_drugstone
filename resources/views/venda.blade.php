@extends('template')
@section('titulo_pagina', 'Venda')
@section('conteudo_principal')
    
        <div id="formulario">
            <form class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Nome do Produto</label>
                  <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Quantidade</label>
                    <input type="number" class="form-control" id="inputZip">
                </div>
                <div class="col-md-2" id="valor">
                  <label for="inputZip" class="form-label">Valor</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
               
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
              </form>
        </div>

        

        <div id="tabela">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Opções</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <tr>
                    <th scope="row">1</th>
                    <td>Vitamina C</td>
                    <td>R$ 7,63</td>
                    <td>3</td>
                    <td>
                    </td>
                  </tr>
                  
                </tbody>
              </table>
              <div>
                <div id="total_venda">
                <p>Total: R$ </p>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary" id="botao_finalizar">Finalizar</button>
                  <button  class="btn btn-primary"id="botao_cancelar">Cancelar</button>
                </div>
              </div>
        </div>

@endsection
