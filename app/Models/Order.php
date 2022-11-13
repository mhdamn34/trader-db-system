<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $dates = ['order_date','shipped_date','paid_date'];

    public function orderstatus(){

        return $this->belongsTo(OrderStatus::class, 'status_id');
    }

    public function shipper(){

        return $this->belongsTo(Shipper::class, 'shipper_id');
    }

    public function employee(){

        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function customer(){

        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
