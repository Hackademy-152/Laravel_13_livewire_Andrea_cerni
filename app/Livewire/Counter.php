<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
public $count=1;//*dichiaro la variabile che subirà l'azione

public function increment(){//*creo la funzione che compirà l'azione
    $this->count++;
}

public function decrement(){//*altra funzione che agisce sulla variabile
    $this->count--;
}




//!Render deve SEMPRE essere l'ultima funzione ad essere eseguita perché è colei che ci rimanda alla vista, ci reinderizza il lavoro svolto
    public function render()
    {
        return view('livewire.counter');//!ci ritorna infatti la parte visiva!
    }
}
