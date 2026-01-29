@foreach ($categories as $categorie )
    <div>
        <h1>{{ $categorie->title }}</h1>
        <a href="{{ route('categories.edit',$categorie) }}">edit</a>
        <form action="{{ route('categories.destroy',$categorie) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
    </div>
@endforeach

<a href="{{ route('categories.create') }}">ajoute</a>

