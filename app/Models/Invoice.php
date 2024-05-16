<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'seller_id',
        'transaction_id',
        'paid_status',
        'amount',
    ];
    public $timestamps = false;
}
