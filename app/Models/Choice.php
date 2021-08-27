<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [ 'id' ];

    // choise belongs to criteria
    public function criteria()
    {
        return $this->belongsTo(Criteria::class, 'id', 'criteria_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
