@extends('template')
@section('titulo_pagina', 'Página Inicial')
@section('conteudo_principal')
    <div id="imagemfundo">
        <img src="{{url('assents/imagens/farmacia-fundo01.jpg')}}" />
    </div>
    <script src="https://unpkg.com/blip-chat-widget" type="text/javascript">
    </script>
    <script>
        (function () {
            window.onload = function () {
                new BlipChat()
                .withAppKey('emVkZWNrOmIyMDU5YzQzLWZjZjctNDlmNS1iMjI2LWYzYTQ4MGI0NjJjOQ==')
                .withButton({"color":"#2CC3D5","icon":""})
                .withCustomCommonUrl('https://melquisedeque-de-moura-ataide-68mwa.chat.blip.ai/')
                .build();
            }
        })();
    </script>
                                    
@endsection