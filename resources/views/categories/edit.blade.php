<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">

<header class="bg-black shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-white">
            Tifawin<span class="text-orange-500">Souk</span>
        </a>

        <a href="{{ route('categories.index') }}"
           class="border border-white px-4 py-2 rounded">
            Retour
        </a>
    </div>
</header>

<main class="min-h-screen bg-gray-800 flex items-center justify-center p-6">

    <div class="bg-gray-900 w-full max-w-xl p-6 rounded-lg border border-gray-700">

        <h1 class="text-2xl font-bold text-center text-orange-500 mb-6">
            Modifier la categorie
        </h1>

        <form action="{{ route('categories.update', $category) }}"
              method="POST"
              class="space-y-5">
            @csrf
            @method('PUT')
            <div>
                <label class="block mb-1 text-sm">Titre</label>
                <input
                    type="text"
                    name="title"
                    value="{{ $category->title }}"
                    class="w-full bg-black border border-gray-600 rounded px-3 py-2 focus:outline-none focus:border-orange-500"
                >
            </div>
            <div>
                <label class="block mb-1 text-sm">Description</label>
                <textarea
                    name="description"
                    rows="3"
                    class="w-full bg-black border border-gray-600 rounded px-3 py-2 focus:outline-none focus:border-orange-500"
                >{{ $category->description }}</textarea>
            </div>

            <button
                type="submit"
                class="w-full bg-orange-500 text-black font-semibold py-2 rounded">
                Modifier
            </button>

        </form>

    </div>

</main>

</body>
</html>
