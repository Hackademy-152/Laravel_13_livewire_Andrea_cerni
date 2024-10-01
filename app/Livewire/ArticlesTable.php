<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticlesTable extends Component
{
    //!questa funzione ci consente di cancellare un articolo, concettualmente elimina l'intero record quindi noi dobbiamo sfruttare il metodo find andando a catturare l'id dell'articolo interessato
    
    public function deleteArticle($id){
        Article::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.articles-table',['articles'=>Article::all()]);
    }
}
