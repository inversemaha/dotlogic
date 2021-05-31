<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;


    public $fillable = [
        'name', 'email', 'phone','product','company_name','company_size', 'address', 'message'
    ];
}
