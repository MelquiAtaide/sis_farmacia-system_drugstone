<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{url('assents/estilos/estiloLogin.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div id="backform">
    <div id="formulario">
      <h1>Sistema de Farmácia</h1>
      <h2>Bem vindo(a)</h2>
      <form action="{{route('logar')}}" method="post">
        {{ csrf_field() }}

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Digite seu E-mail:</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Digite sua Senha:</label>
            <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
          </div>
          <button type="submit" class="btn btn-primary" >Enviar</button>
        </form>
    </div>
  </div>
</body>
</html>