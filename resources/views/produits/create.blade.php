<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Produit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">

    <header class="bg-black shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">

            <a href="/" class="text-2xl font-bold text-white">
                Tifawin<span class="text-orange-500">Souk</span>
            </a>

            <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
                <a href="/" class="hover:text-orange-500">Accueil</a>
                <a href="/categories" class="hover:text-orange-500">Catégories</a>
                <a href="/produits" class="hover:text-orange-500">Produits</a>
            </nav>

            <a href="{{ route('produits.index') }}"
               class="text-sm border border-white px-4 py-2 rounded hover:bg-white hover:text-black transition">
                 Retour
            </a>
        </div>
    </header>

    <main class="min-h-screen bg-gray-900 flex items-center justify-center p-6">

        <div class="bg-gray-900 w-full max-w-xl rounded-lg shadow border border-gray-800 p-6">

            <h1 class="text-2xl font-bold mb-6 text-center text-orange-500">
                Ajouter un produit
            </h1>

            <form action="{{ route('produits.store') }}"
                  method="POST"
                  class="space-y-5">
                @csrf

                <div>
                    <label class="block mb-1 text-sm">titre</label>
                    <input
                        type="text"
                        name="title"
                        class="w-full bg-black border border-gray-600 rounded px-3 py-2 focus:outline-none focus:border-orange-500"
                        required
                    >
                </div>

                <div>
                    <label class="block mb-1 text-sm">description</label>
                    <textarea
                        name="description"
                        rows="3"
                        class="w-full bg-black border border-gray-600 rounded px-3 py-2 focus:outline-none focus:border-orange-500"
                        required
                    ></textarea>
                </div>

                <div>
                    <label class="block mb-1 text-sm">price (DH)</label>
                    <input
                        type="number"
                        name="price"
                        min="0"
                        class="w-full bg-black border border-gray-600 rounded px-3 py-2 focus:outline-none focus:border-orange-500"
                        required
                    >
                </div>

                <div>
                    <label class="block mb-1 text-sm">Image</label>
                    <input
                        type="file"
                        name="image"
                        class="w-full text-sm bg-black border border-gray-600 rounded px-3 py-2"
                    >
                </div>

                <div>
                    <label class="block mb-1 text-sm">Categorie</label>
                    <select
                        name="categorie_id"
                        class="w-full bg-black border border-gray-600 rounded px-3 py-2 focus:outline-none focus:border-orange-500"
                        required
                    >
                        @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">
                                {{ $categorie->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button
                    type="submit"
                    class="w-full bg-orange-500 text-black font-semibold py-2 rounded hover:bg-orange-400 transition">
                    Ajouter un produit
                </button>

            </form>
        </div>

    </main>

</body>
</html>
