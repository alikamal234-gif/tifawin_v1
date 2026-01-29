


<form action="{{ route('categories.edit',$categorie) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">title :</label><br><br>
    <input type="text" name="title" id="title" value="{{ $categorie->title }}"><br><br>

    
    <label for="description">description :</label><br><br>
    <input type="text" name="description" id="description" value="{{ $categorie->description }}"><br><br>

    
    <button type="submit">ajoute</button>
</form>