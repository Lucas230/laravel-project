<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>TEI - Altera Usuario</title>
</head>
<body>
    <header class="font-bold text-center text-4xl shadow-lg py-4">
        Editar Usuário
        <!-- <a class="text-sm bg-green-400 rounded-md p-2 text-white" href="{{route('usuarios.create')}}">Novo</a> -->
    </header>
    <main class="max-w-2xl mx-auto shadow-md rounded-b-xl bg-white divide-y-2">
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $erro)
                        <li>{{$erro}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="flex flex-col px-8" action="{{route('usuarios.update', $usuario->id)}}" method="POST" data-parsley-validate>
            @method('PUT')
            @csrf 
            
            <label class="mt-4 font-bold" for="nome">Nome:</label>
            <input 
                class="border-2 rounded-md" 
                type="text" id="nome" 
                value="{{$usuario->nome}}" 
                name="nome"
                data-parsley-required="true" 
                data-parsley-minlength="6"
                data-parsley-minlength="40"

                data-parsley-required-message="Campo obrigatório"
                data-parsley-minlength-message="Campo com um mínimo 6 letras"
                data-parsley-maxlength-message="Campo com um máximo de 40 letras">

            <label class="mt-4 font-bold" for="usuario">Usuario:</label>
            <input 
                class="border-2 rounded-md" 
                type="text" id="usuario" 
                value="{{$usuario->usuario}}" 
                name="usuario"
                data-parsley-required="true" 
                data-parsley-minlength="6"
                data-parsley-minlength="40"

                data-parsley-required-message="Campo obrigatório"
                data-parsley-minlength-message="Campo com um mínimo 6 letras"
                data-parsley-maxlength-message="Campo com um máximo de 40 letras">

            <label class="mt-4 font-bold" for="email">E-mail:</label>
            <input 
                class="border-2 rounded-md" 
                type="text" id="email" 
                value="{{$usuario->email}}" 
                name="email"
                data-parsley-required="true" 
                data-parsley-minlength="6"
                data-parsley-minlength="40"

                data-parsley-required-message="Campo obrigatório"
                data-parsley-minlength-message="Campo com um mínimo 6 letras"
                data-parsley-maxlength-message="Campo com um máximo de 40 letras">

            <label class="mt-4 font-bold" for="nascimento">Data de nascimento:</label>
            <input 
                class="border-2 rounded-md" 
                type="datetime" id="nascimento" 
                value="{{$usuario->nascimento}}" 
                name="nascimento"
                data-parsley-required="true" 
                data-parsley-minlength="6"
                data-parsley-minlength="40"

                data-parsley-required-message="Campo obrigatório"
                data-parsley-minlength-message="Campo com um mínimo 6 letras"
                data-parsley-maxlength-message="Campo com um máximo de 40 letras">

            <label class="mt-4 font-bold" for="senha">Senha:</label>
            <input 
                class="border-2 rounded-md" 
                type="password" id="senha" 
                value="{{$usuario->senha}}" 
                name="senha"
                data-parsley-required="true" 
                data-parsley-minlength="6"
                data-parsley-minlength="40"

                data-parsley-required-message="Campo obrigatório"
                data-parsley-minlength-message="Campo com um mínimo 6 letras"
                data-parsley-maxlength-message="Campo com um máximo de 40 letras">

            <div class="self-center my-8">
                <button class="bg-blue-500 rounded-md text-white font-semibold p-2" type="submit">Salvar</button>
                <a class="bg-red-500 rounded-md text-white font-semibold p-2" href="{{route('usuarios.index')}}">Cancelar</a>
            </div>
        </form>
    </main>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>