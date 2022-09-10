<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected  $table = "order_details";
    protected $primarykey = "id";

    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
