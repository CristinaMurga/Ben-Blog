<x-main>
    <x-slot:title>Category list</x-slot:title>

    <div class="container p-5">
        <div class="row">
            <div class="col-6">
                <h2>Categories</h2>
            </div>
            <div class="col-6 text-end">
                <a href="{{ route('categories.create') }}" class=" colorLinks">Crea categoria</a>
            </div>
        </div>
           
                <x-form-success-message/>
                <x-error-message/>
        
        <table class="table table-bordered my-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Articoli</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td> {{ $category->id }} </td>
                    <td> {{$category->name }} </td>
                    <td> Numero di articoli: {{$category->articles->count()}}
                        @foreach($category->articles as $article) <br>
                        <span> {{$article->title}}</span>
                        @endforeach
                    </td>
                    <td class="text-end">
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm editBtn">modifica</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline  ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm removeBtn">cancella</button>
                        </form>
                    
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        {{$categories->links()}}

    </div>
</x-main>