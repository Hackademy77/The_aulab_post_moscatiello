<x-layout>
    <div class= "container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                modifica un'articolo
            </h1>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div cLass="col-12 col-md-8">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $errors)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form cLass="card p-5 shadow" action="" method-"" enctype="multipart/form-data">
                    @csrf

                    <div cLass="mb-3">
                        <label for="title" cLass="form-label">Titolo:</label>  
                        <input name="title" type="text" class="form-control" id="title" value="{{$article->title}}"> 
                    </div>

                    <div cLass="mb-3">
                        <label for="subtitle" cLass="form-label">Sottotitolo:</label>
                        <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{$article->subtitle}}">
                    </div>

                    <div class="mb-3">
                        <label for="image" cLass="form-label">Immagine:</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    
                    <div cLass="mb-3">
                        <label for="category" cLass="form-label">Categoria:</label>
                        <select name="category" id="category" class="form-control text-capitalize">
                            @foreach($categories as $category)
                            <option value="{{$category->id}}" 
                                @if($article->category && $category->id == $article->category->id) selected
                                 @endif>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="body" cLass="form-label">Corpo del testo:</label>
                        <textarea name="body" id="body" cols="30" rows="7" cLass="form-control">{{$article->body}}</textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags:</label> 
                        <input name="tags" id="tags" class="form-control" value="{{$article->tags->implode('name', ', ')}}">
                        <span cLass="small fst-italic">Dividi ogni tag con una virgola</span>
                    </div>

                    <div class="mt-2">
                        <button class="btn btn-info text-white">Inserisci un articolo</button>
                        <a class="btn btn-outline-info " href="{{route('homepage')}}"> Torna alla home</a></p>
                    </div>
                </form>
            </div>

        </div>

    </div>
</x-layout>

