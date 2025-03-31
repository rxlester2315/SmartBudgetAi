<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;  // Add this import

class Expenses extends Model
{
    protected $fillable = [
        'user_id',
        'expense_date'
    ];

    public function items(): HasMany
    {
        return $this->hasMany(ExpenseItems::class, 'expense_id');
    }
}