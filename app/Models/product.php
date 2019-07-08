<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\review;

class product extends Model
{
    public function review()
    {
        return $this->hasMany(review::class);
    }
}
