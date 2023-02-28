<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\User;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index(){
        $expenses = Expense::with(['category:id,name'])->get(['id','user_id','description', 'amount', 'category_id']);
        return response()->json($expenses, 200);
    }
}
