<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    public function bill_detail()
    {
        return $this->hasOne('App\Models\bill_detail');
    }
}
