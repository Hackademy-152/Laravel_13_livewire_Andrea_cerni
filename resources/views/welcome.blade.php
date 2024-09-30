<x-layout>

    <h1 class="text-center fs-1 text-danger text-decoration-underline display-1">Livewire prova counter</h1>

    <!--richiamare un componente creato con livewire:-->
    <livewire:counter />
    <!--ora ci serve la componente classe collagata alla vista di questo counter per poter inserire al suo interno la funzione lo farà lavorare, e lo ha creatolui stesso col comando, nella cartella livewire contenuta dentro app nel file counter.php appunto-->
    <!--abbiamo creato un altro componente livewire chiamato "create-form" e lo richiamiamo con la stessa sintassi-->
    <h1 class="text-center fs-1 text-danger text-decoration-underline">Livewire prova Form</h1>
    <!--lascio l'errore di sintassi fomr perché poi non funziona più-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:create-fomr />
            </div>
        </div>
    </div>
</x-layout>
