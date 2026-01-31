
<form action="{{ route('categories.update',$category) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">title :</label><br><br>
    <input type="text" name="title" id="title" value="{{ $category->title }}"><br><br>

    
    <label for="description">description :</label><br><br>
    <input type="text" name="description" id="description" value="{{ $category->description }}"><br><br>

    
    <button type="submit">modifier</button>
</form>