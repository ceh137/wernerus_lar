<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
                'method_id',
                'route_id',
                'order_num',
                'delivery_type',
                'weight' ,
                'volume' ,
                'pieces' ,
                'heaviest',
                'longest' ,
                'worth' ,
                'to_addr' ,
                'from_addr',
                'rig_pac',
                'stretch_pac',
                'bort_pac' ,
                'insurance' ,
                'prr_to_addr' ,
                'prr_from_addr' ,
                'type_id' ,
                'sender_id' ,
                'receiver_id',
                'tp_id' ,
                'sender_company_id' ,
                'receiver_company_id' ,
                'tp_company_id' ,
                'order_price_id' ,
                'who_pays_id' ,
                'comment' ,
                'filled_at_terminal',
                'status_id' ,
                'files_id',
                'del_from_addr_time_from',
                'del_from_addr_time_to',
                'del_to_addr_time_from',
                'del_to_addr_time_to',
                'date_del_to_addr',
                'date_del_from_addr',
                'address_to',
                'address_from',
                'time_to_order',
                'created_at',
                'updated_at'
            ];

    public function order_prices() {
        return $this->hasOne(OrderPrice::class, 'id', 'order_price_id');
    }
    public function route() {
        return $this->hasOne(Route::class, 'id', 'route_id');
    }
    public function sender() {
        return $this->hasOne(Customer::class, 'id', 'sender_id');
    }
    public function receiver() {
        return $this->hasOne(Customer::class, 'id', 'receiver_id');
    }
    public function tp() {
        return $this->hasOne(Customer::class, 'id', 'tp_id');
    }

    public function sender_comp() {
        return $this->hasOne(Company::class, 'id', 'sender_company_id');
    }
    public function receiver_comp() {
        return $this->hasOne(Company::class, 'id', 'receiver_company_id');
    }
    public function tp_comp() {
        return $this->hasOne(Company::class, 'id', 'tp_company_id');
    }

    public function cargo_type() {
        return $this->hasOne(Type::class, 'id', 'type_id');
    }

    public function who_pays() {
        return $this->hasOne(WhoPays::class, 'id', 'who_pays_id');
    }

    public function files() {
        return $this->hasOne(File::class, 'id', 'files_id');
    }

    public function method() {
        return $this->hasOne(Method::class, 'id', 'method_id');
    }

    public function status() {
        return $this->hasOne(OrderStatus::class, 'id', 'status_id');
    }

    public function app_to_order() {
        return $this->belongsTo(AppToOrder::class, 'order_id', 'id');
    }

    public function debt() {
        return $this->belongsTo(Debt::class, 'id', 'order_id');
    }
}
