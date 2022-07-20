<?php

namespace App\Http\Livewire;

use App\Models\AppToOrder;
use App\Models\Debt;
use App\Models\Order;
use App\Services\TrackNum;
use Carbon\Carbon;
use Google\Service\AdMob\App;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ApplicationToOrderModal extends ModalComponent
{

    public Order $order;
    public string $confirmationTitle = '';
    public string $trackNum ='';



    public static function modalMaxWidth(): string{
        return "7xl";
    }

    public function mount($id) {
        $this->order = Order::find($id);
    }

    public function render()
    {
        return view('livewire.application-to-order-modal');
    }

    public function cancel() {
        $this->closeModal();
    }

    public function confirm()
    {
        try {
        DB::beginTransaction();
            $app_to_order = new AppToOrder();
            $app_to_order->order_id = $this->order->id;
            $app_to_order->save();
            $app_to_order->order_num = (new \App\Services\TrackNum)->getTrackNum($app_to_order->id);
            $app_to_order->save();
            $this->order->status_id = 2;
            $this->order->time_to_order = now('Europe/Moscow');
            $this->order->order_num = $app_to_order->order_num;
            $this->order->save();
            $debt = new Debt();
            $debt->order_id = $this->order->id;
            $debt->amount = $this->order->order_prices->total;
            $debt->debt_status_id = 10;
            $debt->is_in_debt = true;
            $debt->save();
           DB::commit();
        } catch (\Exception $e) {
          DB::rollBack();
            return $e->getMessage();
        }


        $this->closeModalWithEvents([
            'pg:eventRefresh-application_table',
        ]);
    }

    public function change() {
        return redirect()->route('admin.application.edit', ['application' => $this->order->id])->with(['to_order' => true]);
    }
}
