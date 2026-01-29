@foreach ($produits as $produit )
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