<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class review extends Model
{
    public function product()
    {
        return $this->belongsTo(product::class);
    }
}
