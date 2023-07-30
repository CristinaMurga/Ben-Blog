<x-main>
    <x-slot:title>Crea categoria</x-slot:title>
    <div class="container-my-5">
        <div class="row">
            <div class="col-6 mx-auto">
                <h2>Crea una nuova categoria</h2>
      
                <form action="{{ route('categories.store') }}" method="POST"class="mt-4">

                @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" class="form-control">
                            @error('name') <span class="small text-danger"> {{ $message }}</span> @enderror
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