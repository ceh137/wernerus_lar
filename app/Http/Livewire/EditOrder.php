<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Order;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditOrder extends ModalComponent
{
    public Order $order;
    public $cities_to;
    public $cities_from;

    protected $rules = [
        'order.method' => 'required|int',
        'order.route.to_city' => 'required|int',
        'order.route.from_city' => 'required|int',
    ];

    public static function modalMaxWidth(): string{
        return "7xl";
    }
    public function mount($id)
    {
//        $this->cities_to = City::all();
//        $this->cities_from = City::where('code','=', 'MSK')->orWhere('code','=', 'SPB')->get();

        $this->order = Order::find($id);
    }


    public function cancel()
    {
        $this->closeModal();
    }

    public function confirm() {


        $this->closeModalWithEvents([
            'pg:eventRefresh-index_table',
        ]);


    }
    public function render()
    {
        return view('livewire.edit-order');
    }
}
