<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Item;

class InfiniteScroll extends Component
{
    public $items = [];

    public function loadMore()
    {
        $newItems = Item::skip(count($this->items))->take(10)->get();
        $this->items = $this->items->concat($newItems);
    }

    public function render()
    {
        return view('livewire.infinite-scroll');
    }
}