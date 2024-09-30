<div class="bg-black"><!-- tutto quello che è dentro questo componente di livewire DEVE STARE SOLO DENTRO QUESTO DIV-->
<!--In questo caso, abbiamo creato il componente cuounter con lo specifico comando nel terminale : php artisan make: livewire counter-->
  <h2 class="text-primary text-capitalize text-center">Il tuo componente livewire!</h2>
  <!--ora che ci siamo creati la logica del count dobbiamo poterlo vedere! e lo richiamiamo alla vista mediante blade-->
  <h2 class="m-5 text-primary text-center text-decoration-underline">
      {{$count}}
    </h2>
    <!--all'interno di counter.php noi abbiamo creato la logica applicativa del componente livewire, però non abbiamo modo di vederla in azione senza dei button che ci consentono di compiere queste azioni proprio come facevamo con l'addEventListener in JS!-->
    <button wire:click="increment" class="btn btn-success m-5">+</button>
    <button wire:click="decrement" class="btn btn-warning">-</button>
</div>
