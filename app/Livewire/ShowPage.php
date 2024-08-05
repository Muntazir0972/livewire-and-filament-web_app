<?php

namespace App\Livewire;

use App\Models\Page;
use Livewire\Component;

class ShowPage extends Component
{   

    public $pageId = null;

    public function mount($id){
        $this->pageId = $id;
    }

    public function render()
    {   
    //  $page = Page::where('id',$this->pageId)->first();
        $page = Page::findOrFail($this->pageId);

        if ($page == null) {
            abort(404);
        }

        return view('livewire.show-page',compact('page'));
    }
}
