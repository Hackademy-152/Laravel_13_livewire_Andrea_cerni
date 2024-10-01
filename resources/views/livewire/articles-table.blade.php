<div>
    <!--tabella sciacallata-->
    <!--creata con livewire!-->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Genere</th>
                <th scope="col">Trama</th>
            </tr>
        </thead>
        <tbody>
            <!--per poter vedere i dati che si creano nella tabella,necessito un for each e di passare la sintassi blade per visualizzare il contenuto di ogni record-->
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td class="text-primary bg-warning">{{ $article->titolo }}</td>
                    <td class="bg-danger">{{ $article->genere }}</td>
                    <td class="bg-black text-white">{{ $article->trama }}</td>
                    <td>
                        <!--grazie a livewire noi colleghiamo il bottone alla funzione creata in articlesTable nella cartella di livewire e la con la sintassi di blade la facciamo scattare sull'id dell'articolo rendendo così il bottone parametrico, altrimenti non può sapere quale cancellare!-->
                        <button class="btn btn-warning" wire:click="deleteArticle({{ $article->id }})">Cancella</button>
                        <!--necessitiamo di un btn con anchor-->
                        <a href="{{route("change",compact('article'))}}"class="btn btn-success">modifica</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
