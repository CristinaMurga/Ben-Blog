
<x-main>
  <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container coloredContainer p-5 my-5 rounded">
        
        <div class="mt-4">
            <div class="d-flex justify-content-between">
                <h1>{{ $title }}</h1>
                @auth
                <a href="{{ route('articles.create') }}" class="colorLinks link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-plus-circle colorLinks"></i> Crea un nuovo articolo</a>
                 @endauth
            </div>
      
            <div class="mt-4">
                <div class="row">
                    @foreach($articles as $article)
                    <x-card :article="$articles" :title="$article->title" :categories="$article->categories" 
                        :description="$article->description" :link="route('article', $article->id)"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-main>