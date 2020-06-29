<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'date'];
    
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_products');
    }

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
