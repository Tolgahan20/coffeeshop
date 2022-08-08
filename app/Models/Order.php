<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\OrderTotal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
    public function totalorders()
    {
        return $this->hasMany(OrderTotal::class);
    }
}
