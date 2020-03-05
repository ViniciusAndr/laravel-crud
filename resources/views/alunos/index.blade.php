<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alunos</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>

    <style>
        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
    <body>
        <nav>
            <div class="nav-wrapper green darken-1">
            <a href="alunos" class="brand-logo center">Alunos</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/">Voltar</a></li>
            </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="row" style="text-align: right; margin-top: 20px">
                <a class="btn-floating waves-effect waves-light deep-orange darken-2" href="{{ route('alunos.create') }}">
                    <i class="material-icons">add</i>
                </a>
            </div>
            <table style="margin-top: 1rem">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Cidade</th>
                        <th>Estado</th>
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
                                    <i class="material-icons" style="font-size: 17px; margin-top: 3px">create</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
