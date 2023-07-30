<div class="mb-4 col-6 col-lg-3">
    <div class="card h-100 shadow">
        <div class="card-body">
            <p class="card-subtitle small mb-1">
                @foreach($categories as $category)
                    {{ $category->name }}
                @endforeach
            </p>
            <h4 class="card-title">{{$title}}</h4>
            <p class="card-text"> {{ $description }} </p>
        </div>
        <div class="card-footer bg-white d-flex justify-content-between">
            <a href="{{ $linkToArticle}}" class=" m-0 btn btn-sm readMoreBtn">Leggi di più</a>
            <div class="d-flex">
            <a href="{{ $linkToEdit }}" class="me-1 btn btn-sm editBtn"><i class="bi bi-pen-fill"></i></a>
            <form action="{{ $linkToDestroy}}" method="POST">
             @csrf
             @method('DELETE')
                <button type="submit" class="btn btn-sm  removeBtn"><i class="bi bi-trash-fill"></i></button>
            </div>
            </form>
        </div>
    </div>
    
</div>