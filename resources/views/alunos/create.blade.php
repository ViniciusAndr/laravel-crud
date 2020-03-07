<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Criar aluno</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="alunos" class="navbar-brand">Alunos</a>
            <div class="collapse navbar-collapse">
            <ul id="nav-mobile" class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('alunos.index')}}">
                        <i class="material-icons add_box row" title="Voltar">keyboard_backspace</i>
                    </a>
                </li>
            </ul>
            </div>
        </nav>
        
        <div class="container" style="margin-top: 30px">
            <div class="row">
                <form class="col s12" action="{{ route('alunos.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input placeholder="Nome" name="nome" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="cidade">Cidade</label>
                            <input placeholder="Cidade" name="cidade" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input placeholder="Estado" name="estado" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" style="text-align: center">
                        <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
