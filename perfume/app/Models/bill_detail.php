<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    use HasFactory;

    public function bill()
    {
        return $this->belongsTo('App\Models\bill');
    }
}
