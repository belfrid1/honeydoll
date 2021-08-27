<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $fillable = [ 'id' ];

    // one criteria has many choise
    public function choices()
    {
        return $this->hasMany(Choice::class, 'criteria_id', 'id');
    }

    // one criteria can be linked to several products
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_criteria');
    }

}


