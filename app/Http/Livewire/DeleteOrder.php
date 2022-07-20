<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteOrder extends ModalComponent
{
    public Order $order;
    public string $confirmationTitle = 'Вы уверены, что хотите удалить данный заказ?';

    public string $confirmationDescription = 'В случае удаления, данные будут потеряны безвозвратно.';

    public function mount($id)
    {

        $this->order = Order::find($id);
    }

    public function render()
    {

        return view('livewire.delete-order');
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function confirm() {
        $this->order->delete();

        $this->closeModalWithEvents([
            'pg:eventRefresh-application_table',
        ]);


    }
}
