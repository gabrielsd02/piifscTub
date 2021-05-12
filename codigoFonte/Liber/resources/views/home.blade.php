<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel = "stylesheet"  href = "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css"  integridade = "SHA384-ggOyR0iXCbMQv3Xipma34MD + DH / 1fQ784 / j6cY / iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin = "anônimo" >
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Liber</title>
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="floating-labels.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
   
    
</head>
<body>
  @extends('layouts.app')

  @section('content')
  <title>{{ config('app.name', 'Liber') }}</title>
    <form>
    <div class="form-group">
    <h1 style="font-family: fantasy; text-align: left;" class="ml-5 mt-5">Bem vindo, Usuário!</h1>

    <div style="text-align: right;" >
    
    <button type="button"class="btn btn-dark mr-5"> <a href="#">Meu Perfil</a></button>
    <button type="button"class="btn btn-dark mr-5"> <a href="#">Participar Sessão</a></button>
    </div>
    </div>
    </form>

    <form class="form-group">
        <textarea class=""></textarea>

    </form>


 
</body>
</html>


<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
@endsection