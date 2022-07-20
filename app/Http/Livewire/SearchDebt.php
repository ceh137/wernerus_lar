<?php

namespace App\Http\Livewire;

use App\Models\Debt;
use App\Models\DebtStatus;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class SearchDebt extends ModalComponent
{

    public string $confirmationTitle = '';
    public string $trackNum ='';
    public string $order_id = '';
    public bool $loading = false;
    public Collection $orders ;
    protected $listeners = ['refreshComponent' => '$refresh'];

    public static function modalMaxWidth(): string{
        return "7xl";
    }

    public function mount() {
        $this->orders = Collection::empty();
    }

    public function search() {
        $this->loading = true;
        $this->emit('refreshComponent');

        $this->order_id = strtoupper($this->order_id);
        $this->emit('refreshComponent');
        $this->orders = Order::where('order_num', 'LIKE', '%'.$this->order_id.'%')
            ->orWhere('order_num', 'LIKE', $this->order_id.'%')
            ->orWhere('order_num', 'LIKE', '%'.$this->order_id)
            ->with('debt')->get();
        $this->loading = false;
        $this->emit('refreshComponent');

    }

    public function goToOrder($id) {
        $this->closeModalWithEvents([

        ]);
    }

    public function render()
    {
        return view('livewire.search-debt');
    }
}
