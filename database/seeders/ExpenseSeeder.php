<?php

namespace Database\Seeders;

use App\Models\Expense;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Expense::create([
            'amount' => 20,00,
            'description'=> 'Pieczywko',
            'user_id'=>1,
            'category_id' => 1
        ]);
    }
}
