<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alunos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <style>
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="alunos" class="navbar-brand">Alunos</a>
            <div class="collapse navbar-collapse">
            <ul id="nav-mobile" class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/">
                        <i class="material-icons add_box row" title="Voltar">keyboard_backspace</i>
                    </a>
                </li>
            </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="row offset-11" style="text-align: right; margin-top: 20px">
                <a href="{{ route('alunos.create') }}">
                    <i class="material-icons add_box" title="Adicionar">add_box</i>
                </a>
                
            </div>
            <table style="margin-top: 1rem" class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno['nome'] }}</td>
                            <td>{{ $aluno['cidade'] }}</td>
                            <td>{{ $aluno['estado'] }}</td>
                            <td>
                                <a href="{{ route('alunos.edit', $aluno['id']) }}"> 
                                    <i class="material-icons" style="font-size: 17px; margin-top: 3px" title="Editar">create</i>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('alunos.show', $aluno['id']) }}"> 
                                    <i class="material-icons" style="font-size: 17px; margin-top: 3px" title="Visualizar">remove_red_eye</i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('alunos.destroy', $aluno['id']) }}" method="POST" id="form{{$aluno['id']}}">
                                    @csrf
                                    @method('DELETE')
                                    <i class="material-icons" style="font-size: 17px; margin-top: 3px" onClick="submitForm({{$aluno['id']}})" title="Remover">delete</i>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

        <script>
            function submitForm(id) {
                console.log('oi')
                document.getElementById("form" + id).submit();
            }
        </script>
    </body>
</html>
