<x-layout>
    <h1>Modifica le avventure di franco!</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:change-form articleId="{{$article->id}}"><!--parametro parametrico per far capire cosa deve montare il nostro change-->
            </div>
        </div>
    </div>
      
</x-layout>