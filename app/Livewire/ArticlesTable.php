<?php

namespace App\Livewire;

use Livewire\Component;

class ArticlesTable extends Component
{
    public function render()
    {
        return view('livewire.articles-table',['articles'=>Article::all()]);
    }
}
