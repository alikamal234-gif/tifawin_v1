<form action="{{ route('produits.store') }}" method="POST">
    @csrf
    <label for="title">title :</label><br><br>
    <input type="text" name="title" id="title"><br><br>

    
    <label for="description">description :</label><br><br>
    <input type="text" name="description" id="description"><br><br>

    <label for="price">price :</label><br><br>
    <input type="number" name="price" id="price"><br><br>

    <label for="image"> :</label><br><br>
    <input type="file" name="image" id="image"><br><br>

    <select name="categorie_id" id=""><br><br>
        @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
        @endforeach
    </select><br><br>
    <button type="submit">ajoute</button>
</form>