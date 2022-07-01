<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>TEI - Listagem de usuários</title>
</head>
<body>
    <header class="font-bold text-center text-4xl shadow-lg py-4">
        Lista de Usuários
        <a class="text-sm bg-green-400 rounded-md p-2 text-white" href="{{route('usuarios.create')}}">Novo</a>
    </header>

    <main class="border max-w-2xl mx-auto shadow-md rounded-b-xl bg-white divide-y-2">

        @foreach ($listagemUsuarios as $usuario)
            <div class="grid grid-cols-2 p-3 divide-x-2">
                <div class="text-center font-bold">{{$usuario->nome}}</div>
                <div class="px-3">
                    <a class="bg-blue-500 runded-md p-1 text-white rounded-md" href="{{route('usuarios.edit', $usuario->id)}}">Editar</a>
                    <a class="bg-red-500 runded-md p-1 text-white rounded-md" href="{{route('usuarios.show', $usuario->id)}}">Excluir</a>
                </div>
            </div>
        @endforeach
    </main>
</body>
</html>