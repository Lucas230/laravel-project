<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>TEI - Página de teste</title>
</head>
<body>
<header class="flex shadow-md p-3 justify-between">
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </button>
      <button>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
        </svg>
      </button>
    </header>

    <main class="p-5">
      <div class="font-bold text-3xl">Melhores Destinos</div>
      <div class="text-x1">Para sua Viagem</div>

      <div class="mt-7 shadow-lg rounded-t-3xl">
        <img class="rounded-t-3xl" src="https://picsum.photos/500/450" />
        <div class="flex justify-between p-4">
          <div>
            <div class="font-semibold text-lg">Noruega</div>
            <div class="font-bold text-xl">R$10.297<span class="text-gray-400 text-sm">/5dias</span></div>
          </div>
          <div class="bg-green-600 rounded-xl text-white font-bold self-center p-3">Comprar</div>
        </div>
      </div>

      <div class="mt-7 shadow-lg rounded-t-3xl">
        <img class="rounded-t-3xl" src="https://picsum.photos/500/451" />
        <div class="flex justify-between p-4">
          <div>
            <div class="font-semibold text-lg">Australia</div>
            <div class="font-bold text-xl">R$9.000<span class="text-gray-400 text-sm">/5dias</span></div>
          </div>
          <div class="bg-green-600 rounded-xl text-white font-bold self-center p-3">Comprar</div>
        </div>
      </div>

      <div class="mt-7 shadow-lg rounded-t-3xl">
        <img class="rounded-t-3xl" src="https://picsum.photos/500/452" />
        <div class="flex justify-between p-4">
          <div>
            <div class="font-semibold text-lg">Suécia</div>
            <div class="font-bold text-xl">R$11.290<span class="text-gray-400 text-sm">/5dias</span></div>
          </div>
          <div class="bg-green-600 rounded-xl text-white font-bold self-center p-3">Comprar</div>
        </div>
      </div>
    </main>
</body>
</html>