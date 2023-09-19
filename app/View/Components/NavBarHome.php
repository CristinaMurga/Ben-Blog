<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavBarHome extends Component
{
    public $nav;

    public function __construct()
    {
        $this->nav = [
            route('public.articles') => 'Articoli',
            route('anime.genres') => 'Anime',
            route('supereroi') => 'Supereroi',
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-barHome');
    }
}
