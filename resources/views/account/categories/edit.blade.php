<x-main>
    <x-slot:title>Modifica categoria</x-slot:title>
    <div class="container-my-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2>Modifica categoria</h2>
              
                <x-form-success-message/>
          
                <form action="{{ route('categories.update' , $category) }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control" 
                                value="{{ old('name', $category->name) }}">
                        </div>
                        <div class="col-12 mb-4">
                            <button type="submit" class="btn submitBtn">Salva</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-main>