<x-main>

<div class="container mt-5">
    <div class="p-5">
        <div class="row d-flex">
            <div class=" col-12 col-md-6 d-flex flex-column justify-content-center p-3">
                <h2 class="align-self-center">{{ $title }}</h2>
                <p class="lead text-center">{{ $description }}</p>
            </div>

            <div class="col-12 col-md-6">
                @if(session()->has('success'))
                   <x-form-success-message :success="session('success')"/>
                @endif

                <div class="row">
                    <form action="{{ route('contatti.save')}}" method="POST">
                    @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="name" class="form-label">Nome</label>
                                <input type="name" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Messagio</label>
                                <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                            </div> 
                            <div class="col-12">
                                <button type="submit" class="w-100 btn btn btn-dark">Invia richiesta</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
   

</div>

</x-main>