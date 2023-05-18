<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;
use Livewire\WithPagination;

class InfiniteScroll extends Component
{
    use WithPagination;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $items = Item::paginate($this->perPage);

        return view('livewire.infinite-scroll', [
            'items' => $items
        ]);
    }
}