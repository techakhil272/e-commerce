<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $table = "products";
    protected $primarykey = "id";

    public function user_cart(){
        return $this->belongsToMany(User::class,'carts');
    }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }
}
