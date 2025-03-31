<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseItems extends Model
{
     protected $fillable = [
        'expense_id', // This should match your foreign key column name
        'category',
        'amount'
    ];
}