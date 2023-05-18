<div>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>

    <button wire:click="loadMore">Carregar mais</button>
</div>