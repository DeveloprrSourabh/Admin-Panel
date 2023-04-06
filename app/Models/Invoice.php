<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoicenum',
        'invoicedate',
        'duedate',
        'company',
        'billedto',
        'business',
        'adress',
        'gstin',
        'item',
        'gstrate',
        'quantity',
        'rate',
        'amount',
        'igst',
        'total',
        'empl_id',
    ];
}
