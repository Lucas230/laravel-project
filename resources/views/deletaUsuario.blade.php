<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>TEI - Deleta Usuario</title>
</head>
<body>
    <header class="font-bold text-center text-4xl shadow-lg py-4">
        Excluir Usuário
        <!-- <a class="text-sm bg-green-400 rounded-md p-2 text-white" href="{{route('usuarios.create')}}">Novo</a> -->
    </header>
    <main class="max-w-2xl mx-auto shadow-md rounded-b-xl bg-white divide-y-2">
  <p class="px-7 font-bold text-3xl text-red-600">Deseja Realmente excluir o usuário abaixo:</p>
  <form class="flex flex-col px-8" action="{{route('usuarios.destroy', $usuario->id)}}" method="POST">
    @method('DELETE') @csrf

    <label class="mt-4 font-bold" for="nome">Nome:</label>
    <p class="font-semibold text-gray-400">{{$usuario->nome}}</p>

    <label class="mt-4 font-bold" for="usuario">Usuario:</label>
    <p class="font-semibold text-gray-400">{{$usuario->usuario}}</p>

    <label class="mt-4 font-bold" for="email">E-mail:</label>
    <p class="font-semibold text-gray-400">{{$usuario->email}}</p>

    <label class="mt-4 font-bold" for="nascimento">Data de nascimento:</label>
    <p class="font-semibold text-gray-400">{{$usuario->nascimento}}</p>

    <div class="self-center my-8">
      <button class="bg-red-500 rounded-md text-white font-semibold p-2" type="submit">Excluir</button>
      <a class="bg-blue-500 rounded-md text-white font-semibold p-2" href="{{route('usuarios.index')}}">Cancelar</a>
    </div>
  </form>
</main>
   
</body>
</html>