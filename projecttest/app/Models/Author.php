<?php

namespace App\Models;

use http\Client\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table='authors';
    public $timestamps = false;
//    protected $fillable= ['first_name','last_name','email'];



}
