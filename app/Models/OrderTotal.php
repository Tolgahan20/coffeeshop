<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderTotal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function orders()
    {
        return $this->belongsTo(Order::class);
    }
}
