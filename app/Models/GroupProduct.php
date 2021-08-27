<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupProduct extends Model
{
    protected $fillable = [ 'id', 'group_id', 'product_id', 'status', 'value' ];

}
