<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Meta extends Component
{

    public string $title;
    public string $description;
    public string $author;
    public string $robots;
    public string $keywords;
    public string $type;
    public string $card;
    public string $image;
    public string $url;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $title = '',
        string $description = '',
        string $keywords = '',
        string $author = '',
        string $robots = '',
        string $type = 'website',
        string $card = 'summary_large_image',
        string $image = '',
        string $url = ''
    )
    {
        $this->title = $title;
        $this->description = $description;
        $this->keywords = $keywords;
        $this->author = $author;
        $this->robots = $robots;
        $this->type = $type;
        $this->card = $card;
        $this->image = $image;
        $this->url = $url ?: url()->current();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render()
    {
        return view('components.meta');
    }
}
