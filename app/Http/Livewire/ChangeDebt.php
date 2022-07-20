<?php

namespace App\Http\Livewire;

use App\Models\Debt;
use App\Models\DebtStatus;
use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use function Symfony\Component\Translation\t;

class ChangeDebt extends ModalComponent
{

    public Order $order;
    public string $confirmationTitle = '';
    public string $trackNum ='';
    public string $amount;
    public Collection $debt_statuses;
    public int $debt_status_id;

    public static function modalMaxWidth(): string{
        return "7xl";
    }

    public function mount($id) {
        $debt = Debt::find($id);
        $order_id = $debt->order_id;
        $this->order = Order::find($order_id);
        $this->amount = $debt->amount;
        $this->debt_status_id = $debt->debt_status_id;

        $this->debt_statuses = DebtStatus::all();
    }

    public function render()
    {
        return view('livewire.change-debt');
    }

    public function confirm() {
        $debt = Debt::where('order_id', '=', $this->order->id)->first();

        $debt->amount = intval($this->amount);
        $debt->debt_status_id = $this->debt_status_id;
        $debt->is_in_debt = $this->debt_status_id != 11;
        $debt->save();

        $this->closeModalWithEvents([
            'pg:eventRefresh-debt_table',
        ]);


    }
}
