<x-main>
<x-slot:title>New Article</x-slot:title>
  <div class="container my-5 p-5 coloredContainer rounded">
    <div class="d-flex justify-content-between"> 
    <h2>Crea un nuovo articolo</h2>
    <a href="{{route('articles.index')}}"><i class="display-6 bi bi-x-circle colorLinks "></i></a>
    </div>

    @if(session()->has('success'))
    <x-form-success-message :success="session('success')"/>
    @endif

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3">

            <div class="col-12">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title" class="form-control" maxlength="150" value="{{ old('title') }}">
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
                        >
                        <label class="form check-label" for="flexCheckDefault">
                            {{ $category->name }}
                        </label>
                    </div>
                    @endforeach
                @error('categories') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="col-12">
                <label for="description">Descrizione breve</label>
                <input type="text" name="description" id="description" class="form-control" maxlength="150" value="{{ old('description') }}">
                @error('description') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="col-12">
                <label for="body">Corpo</label>
                <textarea name="body" id="body"  rows="10" class="form-control">{{ old('body')}}</textarea>
                @error('body') <span class="small text-danger">{{ $message }}</span> @enderror
            </div>
            <div class ="col-12">
                <label for="image">Seleziona immagine</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="col-12">
                <button class="btn submitBtn ">Salva</button>
            </div>
         



        </div>
    </form>
  
  </div>
</x-main>