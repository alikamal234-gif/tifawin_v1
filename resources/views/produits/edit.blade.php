


<form action="{{ route('produits.update',$produit) }}" method="POST">
   @csrf
        @method('PUT')
    <label for="title">title :</label><br><br>
    <input type="text" name="title" id="title" value="{{ $produit->title }}"><br><br>

    
    <label for="description">description :</label><br><br>
    <input type="text" name="description" id="description" value="{{ $produit->description }}"><br><br>

    <label for="price">price :</label><br><br>
    <input type="number" name="price" id="price" value="{{ $produit->price }}"><br><br>

    <select name="categorie_id" id="" value="{{ $produit->categorie_id }}"><br><br>
        @foreach ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->title }}</option>
        @endforeach
    </select><br><br>
    <button type="submit">update</button>
</form>