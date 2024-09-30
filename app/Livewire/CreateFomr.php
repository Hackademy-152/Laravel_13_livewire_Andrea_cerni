<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;//!la importiamo dalla guida per poter dare vita lla validazione nel form

class CreateFomr extends Component
{

    //!per poter creare un articolo ci servono i parametri della classe, che sono esattamente quelli del modello e della tabella!

    #[Validate('required')]
    public $titolo;
    #[Validate('required')] 
    public $trama;
    #[Validate('required')]
    public $genere;
//!Abbiamo creato il form e possiamo metterci i dati che però non vengono salvati perché ci serve una funzione che ci permetta di farlo:
//!in laravel usavamo la dependency injection di request e mettevamo nella funzione il mass assignement che sfrutta il contenuto del modello!
//!in livewire invece questa cosa non serve perché livewire la possiede già al suo interno

public function createArticle(){
    
    //!inseriamo qui il metodo per poter validare l'oggetto article
    $this->validate();


    Article::create([
        'titolo'=> $this->titolo,
        'genere'=> $this->genere,
        'trama'=> $this->trama,
    ]
    //$this->only(['titolo','genere','trama']),sintassi abbrevviata!
    );
    session()->flash('status','il tuo testo è stato inserito correttamente!');
}

    public function render()
    {
        return view('livewire.create-fomr');
    }
}
