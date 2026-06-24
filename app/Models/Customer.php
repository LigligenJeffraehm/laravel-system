<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */

    protected $fillable = [
    'customerName',
    'customerAddress',
    'contact#'
    ];
    use HasFactory;
}
