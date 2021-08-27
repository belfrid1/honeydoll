<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'shopname', 'productname', 'productprice', 'previousprice', 'producturl', 'productpicture1', 'productpicture2', 'productpicture3', 'productmenu',
        'productgender'
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    public function choice()
    {
        return $this->belongsTo(Choice::class);
    }

    // one product can have many criteria
    public function criterias()
    {
        return $this->belongsToMany(Criteria::class, 'product_criteria');
    }

    public function getCommissionAmount($productPrice, $commissionRate){
        $commissionAmount = ($productPrice * $commissionRate) /100;
        return $commissionAmount;
    }
}
