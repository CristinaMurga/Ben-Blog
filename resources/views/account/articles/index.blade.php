
<x-main>
  <x-slot:title>I tuoi articoli</x-slot:title>

    <div class="container coloredContainer rounded p-5 my-4">
      
       
        <div class="mt-4">
            <div class="d-flex justify-content-between">
                <h1>I tuoi articoli</h1>
                <a href="{{ route('articles.create') }}" class="colorLinks link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><i class="bi bi-plus-circle colorLinks "></i> Crea un nuovo articolo</a>
            </div>
            <div class="mt-4">
                <div class="row">
                    <x-form-success-message/>


                    @foreach($articles as $article)
                    <x-card-auth :title="$article->title" :categories="$article->categories"
                    :description="$article->description" :linkToArticle="route('article', $article->id)"
                    :linkToEdit="route('articles.edit', $article)" :linkToDestroy="route('articles.destroy', $article->id)"/>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-main>