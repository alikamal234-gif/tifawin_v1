<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black">

    <header class="bg-black shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">

            <a href="/" class="text-2xl font-bold text-white">
                Tifawin<span class="text-orange-800">Souk</span>
            </a>

            <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
                <a href="/" class="text-white hover:text-orange-500 transition">Accueil</a>
                @if (auth()->check() && auth()->user()->isAdmin())
                <a href="/admin/dashboard" class="text-white hover:text-orange-500 transition">Dashboard</a>
                @endif
                <a href="/categories" class="text-white hover:text-orange-500 transition">Catégories</a>
                <a href="/produits" class="text-white hover:text-orange-500 transition">Produits</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="/login" class="text-sm text-white ">
                    Login
                </a>
                <a href="/register"
                   class="bg-white text-black border-white border-2 px-4 py-2 rounded text-sm ">
                    Sign up
                </a>
            </div>

        </div>
    </header>

    <main class="p-6 bg-gray-800 min-h-screen">
 @if (auth()->check() && auth()->user()->isAdmin())            
        
        <div class="mb-6">
            <a href="{{ route('categories.create') }}"
               class="inline-block bg-orange-500 text-black px-4 py-2 ">
                + Ajouter categorie
            </a>
        </div>
        @endif
        <div class="flex flex-wrap gap-4">

            @foreach ($categories as $categorie)
                <div class="bg-gray-900 border border-white rounded-lg p-4 w-full sm:w-[24%]">

                    <h2 class="text-white text-lg font-semibold mb-2">
                        {{ $categorie->title }}
                    </h2>

                    <p class="text-gray-400 text-sm mb-4">
                        {{ $categorie->description }}
                    </p>

                    <div class="flex justify-between items-center">
 @if (auth()->check() && auth()->user()->isAdmin())                        <a href="{{ route('categories.edit', $categorie) }}"
                           class="text-sm text-orange-400 ">
                            Edit
                        </a>

                        <form action="{{ route('categories.destroy', $categorie) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="text-sm text-red-500 ">
                                Delete
                            </button>
                        </form>
                        @endif

                        

                    </div>
                </div>
            @endforeach

        </div>

    </main>

</body>
</html>
