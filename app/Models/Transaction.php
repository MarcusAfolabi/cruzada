<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        "tx_ref",
        "amount",
        "currency",
        "status",
        "customer_email",
        "customer_name",
        "customer_phone",
        "choice",
        "frequency", 
    ];

    protected $table = 'transactions';
}
