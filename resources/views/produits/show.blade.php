<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $produit->title }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">

    <header class="bg-black shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
             <a href="/" class="text-2xl font-bold text-white">
                Tifawin<span class="text-orange-800">Souk</span>
            </a>

            <a href="{{ route('produits.index') }}"
               class="text-sm text-white hover:text-yellow-500">
                 Retour aux produits
            </a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto p-6">

        <div class="bg-gray-800 rounded-lg shadow p-6 flex flex-col md:flex-row gap-8">

            <div class="w-full md:w-1/2">
                <img
                    src="https://i.pravatar.cc/1000"
                    class="w-full h-96 object-cover rounded"
                >
            </div>

            <div class="w-full md:w-1/2 flex flex-col justify-between">

                <div>
                    <h1 class="text-2xl text-white font-bold mb-3">
                        {{ $produit->title }}
                    </h1>

                    <p class="text-gray-600 mb-4">
                        {{ $produit->description }}
                    </p>

                    <p class="text-sm text-gray-500 mb-2">
                        Categorie :
                        <span class="font-medium text-gray-100">
                            {{ $produit->categorie->title ?? '—' }}
                        </span>
                    </p>
                </div>

                <div class="mt-6">
                    <p class="text-3xl font-bold text-yellow-500 mb-4">
                        {{ $produit->price }} DH
                    </p>

                    <div class="flex gap-4">
                        <button
                            class="bg-yellow-500 text-black px-6 py-2 rounded hover:bg-yellow-400 transition">
                            Ajouter au panier
                        </button>

                        <a href="{{ route('produits.edit', $produit) }}"
                           class="border border-gray-800 text-gray-800 px-6 py-2 rounded hover:bg-gray-800 hover:text-white transition">
                            Modifier
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </main>

</body>
</html>
