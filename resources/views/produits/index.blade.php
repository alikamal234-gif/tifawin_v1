{{-- @foreach ($produits as $produit )
<div>
    <h1>{{ $produit->title }}</h1>
    <a href="{{ route('produits.edit',$produit) }}">edit</a>
    <form action="{{ route('produits.destroy',$produit) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
</div>
@endforeach

<a href="{{ route('produits.create') }}">ajoute</a>
--}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
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
                <a href="/categories" class="text-white hover:text-orange-500 transition">Catégories</a>
                <a href="/produits" class="text-white hover:text-orange-500 transition">Produits</a>
                @if (auth()->check() && auth()->user()->isAdmin())
                <a href="/admin/dashboard" class="text-white hover:text-orange-500 transition">Dashboard</a>
                @endif
            </nav>

            <div class="flex items-center gap-3">
                <a href="/login" class="text-sm text-white hover:text-orange-500">
                    Login
                </a>
                <a href="/register"
                    class="bg-white text-black border-white border-2 px-4 py-2 rounded text-sm hover:bg-orange-400 transition">
                    Sign up
                </a>
            </div>

        </div>
    </header>


    <main class="p-6 bg-gray-800 min-h-screen">
        @if (auth()->check() && auth()->user()->isAdmin())
        <a class="bg-orange-500 p-3 m-3 text-white rounded" href="{{ route('produits.create') }}">+ Ajouter produit</a>
        @endif
        <div class="flex flex-wrap gap-2 m-4">

            @foreach ($produits as $produit)
                <div
                    class="bg-gray-900 rounded-lg shadow-black  sm:w-[19%] max-w-md overflow-hidden border-2 border-white-500">

                    <img src="https://i.pravatar.cc/1000" class="h-48 w-full object-cover">

                    <div class="p-4">
                        <h2 class="font-semibold text-white text-lg mb-1">
                            {{ $produit->title }}
                        </h2>

                        <p class="text-sm text-gray-600 mb-3">
                            {{ $produit->description }}
                        </p>

                         @if (auth()->check() && auth()->user()->isAdmin())
                            
                        <div class="w-full flex justify-between">
                        <a class="text-yellow-400" href="{{ route('produits.edit', $produit) }}">edit</a>
                        <form action="{{ route('produits.destroy', $produit) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500" type="submit">delete</button>
                        </form>
                        </div>
                        @endif

                        <div class="flex justify-between items-center">
                            <p class="text-orange-500 font-bold text-lg">
                                {{ $produit->price }} DH
                            </p>

                            <a href="{{ route('produits.show', $produit) }}"
                                class="bg-gray-900 text-white px-4 py-1.5 rounded text-sm hover:bg-gray-700 transition">
                                Detail
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

    </main>




</body>

</html>