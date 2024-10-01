<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class ChangeForm extends Component
{
    public $articleId;
    public $titolo;
    public $trama;
    public $genere;
    //!funzione necessaria per creare  l'articolo che deve essere modificato!
    public function mount($articleId){
        $article=Article::find($articleId);
        $this->titolo = $article->titolo;
        $this->genere = $article->genere;
        $this->trama = $article->trama;
    }


    public function updateArticle(){
        $article=Article::find($this->articleId); //cosi lo recuperiamo 
        $article->update(
            [
                'titolo'=>$this->titolo,
                'genere'=>$this->genere,
                'trama'=>$this->trama
            ]
            );
            return redirect()->route('index.articles');
    }
    public function render()
    {
        return view('livewire.change-form');
    }
}
