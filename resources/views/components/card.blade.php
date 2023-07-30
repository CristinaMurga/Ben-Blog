<div class="mb-4 col-6 col-lg-3">
    <div class="card h-100 shadow">
        <div class="card-body">
            <div class="card-subtitle small mb-1 d-flex">
                @foreach($categories as $category)
                    <p class="me-2">{{ $category->name }}</p>
                @endforeach
            </div>
            <h4 class="card-title">{{$title}}</h4>
            <p class="card-text"> {{ $description }} </p>
        </div>
        <div class="card-footer bg-white text-end">
            <a href="{{ $link }}" class="btn btn-sm readMoreBtn">Leggi di più</a>
        </div>
    </div>
    
</div>