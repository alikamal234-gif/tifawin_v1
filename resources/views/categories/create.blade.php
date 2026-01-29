<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="title">title :</label><br><br>
    <input type="text" name="title" id="title"><br><br>

    
    <label for="description">description :</label><br><br>
    <input type="text" name="description" id="description"><br><br>

    
    <button type="submit">ajoute</button>
</form>