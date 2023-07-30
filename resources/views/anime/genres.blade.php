<x-main>
    <x-slot:title> Anime Genres</x-slot>
   

    <div class="container mt-5">
        <h1>Anime Genres</h1>
       
        <div class="my-5">
            @foreach($genres as $genre)
                <a href="{{ route('anime.byGenres', $genre['mal_id']) }}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">[{{ $genre['mal_id'] }}] {{ $genre['name'] }} ({{ $genre['count'] }})</a><br>
            @endforeach
        </div>
        
    </div>

</x-main>