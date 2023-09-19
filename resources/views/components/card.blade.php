
    <div class="card h-100 cardEdit bg-color5">
        <div class="card-body">
            <div class="card-subtitle small mb-1 d-flex">
                @foreach($categories as $category)
                    <p class="me-2">{{ $category->name }}</p>
                @endforeach
            </div>
            <h4 class="card-title text-center">{{$title}}</h4>
            <p class="card-text"> {{ $description }} </p>
        </div>
        <div class="card-footer bg-color5 text-end ">
            <a href="{{ $link }}" class="btn btn-sm readMoreBtn">Leggi di più</a>
        </div>
    </div>
