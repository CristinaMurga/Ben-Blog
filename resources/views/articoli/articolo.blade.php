
<x-main>
  <x-slot:title>{{ $article->title }}</x-slot:title>
    <div class="container coloredContainer rounded p-5 my-5 ">
        <div class="pb-4 d-flex justify-content-between">
            <a href="{{ route('public.articles') }}" class="colorLinks "><i class="bi bi-arrow-left colorLinks"></i>Tutti gli articoli </a>
           <div class="d-flex">
              @foreach($article->categories as $category)
              <span class="m-1 p-2 categoryBadge  rounded small">
                {{ $category->name }}
              </span>
              @endforeach
            </div>
        </div>
        <div class="pb-3"> 
          <h2>{{ $article->title }}</h2>
          <p>Scritto da: {{ $article->user->name }}  </p>
        </div>
       
        @if($article->image)
          <img src=" {{ Storage::url($article->image) }}" alt="Image articolo{{ $article->id }}" class="img-fluid">
        
        @endif

       
        <p> {{ $article->description }}</p>
        <p>{{ $article->body }}</p>
       
    </div>
    </x-main>