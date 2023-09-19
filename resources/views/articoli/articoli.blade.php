
<x-main>
  <x-slot:title>{{ $title }}</x-slot:title>
  <x-navbar-general/>
  <header class="bg-white p-0 articlesHeader">
    <img src="\images\headerArticoli.jpg" alt="" class="img-fluid img-header">
    <h1 class="p-5">Articoli</h1>
</header>

    <div class="container-fluid bg-color5 py-5">
        
        <div class="mt-4">
            <div class="text-end pe-4 pb-4">

                @auth
                <a href="{{ route('articles.create') }}" class="colorLinks link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-plus-circle colorLinks"></i> Crea un nuovo articolo</a>
                 @endauth
            </div>
            <div class="container mt-4">
                <div class="row">
                    
                    @foreach($articles as $article)
                    <div class="col-12 col-sm-6 col-lg-3 mb-3">
                    <x-card :article="$articles" :title="$article->title" :categories="$article->categories" 
                        :description="$article->description" :link="route('article', $article->id)"/>
                    </div>
                    @endforeach
                   
                </div>
            </div>
    
        </div>
    </div>
</x-main>