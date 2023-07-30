<x-main>
<x-slot:title>Edit your articles</x-slot:title>
  <div class="container my-5 p-5 coloredContainer rounded">
    <div class="d-flex justify-content-between"> 
        <h2>Modifica l'articolo</h2>
        <a href="{{route('articles.index')}}"><i class="display-6 bi bi-x-circle colorLinks"></i></a>
    </div>

    <x-form-success-message/>
    @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <span>{{ $error }}</span><br>
                @endforeach
            </div>
        @endif

    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">

            <div class="col-12">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" maxlength="150" value="{{ old('title', $article->title) }}">
                @error('title') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-12">
                <label for="category_id">Categorie</label>
                    @foreach(\App\Models\Category::all() as $category)
                    <div class="form-check">
                        <input class="form-check-input"
                                type="checkbox"
                                name="categories[]"
                                value="{{ $category->id }}"
                                @checked($article->categories->contains($category->id))
                        >
                        <label class="form check-label" for="flexCheckDefault">
                            {{ $category->name }}
                        </label>
                    </div>
                    @endforeach
                @error('category_id') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-12">
                <label for="description">Descrizione breve</label>
                <input type="text" name="description" id="description" class="form-control" maxlength="150" value="{{ old('description', $article->description) }}">
                @error('description') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="body">Corpo</label>
                <textarea name="body" id="body"  rows="10" class="form-control">{{ old('body',$article->body)}}</textarea>
                @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class ="col-12">
                <label for="image">Seleziona immagine</label>
                <input type="file" name="image" id="image" class="form-control" value="{{ old('image', $article->image) }}">
            </div>

            <div class="col-12">
                <button class="btn submitBtn">Salva</button>
            </div>
         



        </div>
    </form>
  
  </div>
</x-main>