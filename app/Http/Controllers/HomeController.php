<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FinancialGoals;
use App\Models\Expenses;

class HomeController extends Controller
{
    



    public function landingpage(){
        return view('main-page.landing_page');
    }


    public function setgoals(){
        return view('dashboard-pages-user.set-goals');
    }

    public function setexpenses(){
        return view('dashboard-pages-user.expenses');
    }


   public function setgoalStore(Request $request)
{
    $request->validate([
        'goal_name' => 'required|string',
        'target_amount' => 'required|numeric',
        'target_date' => 'required|date',
        'type_of_goal' => 'required|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = new FinancialGoals;
    $data->goal_name = $request->goal_name;
    $data->target_amount = $request->target_amount;
    $data->target_date = $request->target_date;
    $data->type_of_goal = $request->type_of_goal;

    // Handle image upload
    $imageName = time().'.'.$request->image->extension();
    $request->image->storeAs('public/images', $imageName);
    $data->image = 'images/' . $imageName;

    $data->save();
    
    return redirect()->back()->with('success', 'Goal Created Successfully');
}



public function storexpen(Request $request)
{
    $expense = Expenses::create([
        'user_id' => auth()->id(),
        'expense_date' => now(),
    ]);

    $categoryMap = [
        'food' => 'food',
        'transport' => 'transportation',
        'electricities' => 'utilities',
        'subscriptions' => 'subscriptions',
    ];

    foreach ($categoryMap as $formField => $dbCategory) {
        if ($request->has($formField)) {
            foreach ($request->input($formField) as $amount) {
                if (!empty($amount) && is_numeric($amount)) {
                    $expense->items()->create([
                        'category' => $dbCategory,
                        'amount' => (float)$amount
                    ]);
                }
            }
        }
    }

    return redirect()->back()->with('success', 'Expenses saved!');
}

    


}