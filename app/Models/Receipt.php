<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;
    protected $table = 'receipts';

    protected $fillable = [
        'ReceiptID',
        'StudentNumber',
        'StudentName',
        'Amount',
        'College',
        'DueDate',
        'DatePaid',
    ];
}
