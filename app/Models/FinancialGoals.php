<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinancialGoals extends Model
{
          protected $table = 'fgoal'; // Specify the table name if it's different from the default 'financial_goals'
            protected $fillable = [
                'goal_name',
                'target_amount',
                'target_date',
                'type_of_goal',
                'image',
            ];
}