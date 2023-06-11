<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable= [
       'order_id',
       'phone_id',
       'user_id',
       'tax',
       'subtotal',
        'quantity'

    ];

    public function phone (){
        return $this->belongsTo(Phone::class);
    }
    public function user (){
        return $this->belongsTo(User::class);
    }
}
