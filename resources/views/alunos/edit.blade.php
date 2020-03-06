<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Editar aluno</title>
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
            <a href="alunos" class="brand-logo center">Editar aluno</a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="{{ route('alunos.index') }}">Voltar</a></li>
            </ul>
            </div>
        </nav>
        
        <div class="container" style="margin-top: 30px">
            <div class="row">
                <form class="col s12" action="{{ route('alunos.update', $aluno['id']) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Nome" 
                                name="nome" 
                                type="text" 
                                value="{{ $aluno['nome'] }}"
                                class="validate">
                            <label for="nome">Nome</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Cidade" 
                                name="cidade" 
                                type="text" 
                                value="{{ $aluno['cidade'] }}"
                                class="validate">
                            <label for="cidade">Cidade</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Estado" 
                                name="estado" 
                                type="text" 
                                value="{{ $aluno['estado'] }}"
                                class="validate">
                            <label for="estado">Estado</label>
                        </div>
                    </div>
                    <div class="row" style="text-align: center">
                        <button class="btn waves-effect waves-light deep-orange darken-2" type="submit" name="action">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
</html>
