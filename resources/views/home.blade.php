<x-main>
  <x-slot:title>Home Page</x-slot:title>
  <div class="container-fluid p-0 bg-white"> 
    <header class="bg-white p-0">
        <x-nav-barHome />
        <img src="\images\header2.jpg" alt="" class="img-fluid img-header">
        <h1 class="p-5"> {{ config('app.name') }} </h1>
    </header>
  </div>
  <div class="container-fluid lastestArtContainer bg-color5">
    <h2 class="py-5 m-0 text-center ">Ultimi articoli</h2>
  
    <div class="container my-3 ">
      <div class="row py-3">
        @foreach($lastestArticles as $article)
        <div class="mb-4 col-12 col-sm-6 col-lg-3">
          <x-card  :title="$article->title" :categories="$article->categories" 
            :description="$article->description" :link="route('article', $article->id)"/>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  <div class="container-fluid p-0 container-philosophy">
    <div class="row m-0"> 
      <div class="col-12 col-md-6 p-0">
        <img src="\images\img2.jpg"  class="img-fluid" alt="">
      </div>
      <div class="col-12 col-md-6 d-flex flex-column justify-content-center p-0">
        <h3 class=" m-0 text-center h3-philosophy">La nostra filosofia</h3>
        <p class="p-philosophy">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas repellat rem ipsa iusto delectus inventore sit neque ipsum quidem eos, nisi ea excepturi obcaecati quos maiores ratione magnam earum dolores.</p>
      </div>
  </div>
    
  </div>
  

      
</x-main>
