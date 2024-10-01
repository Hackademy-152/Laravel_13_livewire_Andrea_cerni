<div>
    <div>
        <!--flashed session data per mandare un messaggio all'utente, si collega a quello della session flash in create form php-->
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
      @endif 
      <!--sciacalliamo da bs il form e lo modifichiamo coi campi a noi necessari!-->
          <form wire:submit="updateArticle"><!--questa sintassi ci consente di collegare il form alla funzione che modifica gli articoli e la fa scattare! in pratica copio la function dentro il form! -->
              <div class="mb-3">
                <label class="form-label text-bg-info">modifica  il titolo{{$titolo}}</label>
                <input type="text" class="form-control" wire:model.blur="titolo"><!--Proprio come name in laravel, wire:model ci consente di recuperare i dati che verranno passati al blade !-->
                @error('titolo')<span class="error">{{$message}}</span> @enderror
              </div>
              <div class="mb-3">
                <label class="form-label text-bg-danger">modifica il genere{{$genere}}</label>
                <input type="text" class="form-control"wire:model.blur="genere" >
                <!--tramite documentazione recuperiamo la sintassi per la validation tramite messaggio che informa di un errore -->
                @error('genere')<span class="error">{{$message}}</span> @enderror
              </div>
              <div class="form-floating">
                  <textarea wire:model.blur="trama" class="form-control text-bg-warning" placeholder="inserisci il testo" id="floatingTextarea"></textarea>
                  @error('trama')<span class="error">{{$message}}</span> @enderror
                  <label for="floatingTextarea">scrivi qui!</label>
                </div>
              <button type="submit" class="btn btn-primary m-1">modifica il tuo testo!</button>
            </form>
            <!--.blur nel nostro wire model serve a dare una validazione in diretta-->
      </div>
      
</div>
