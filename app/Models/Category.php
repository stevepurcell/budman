<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'label',
        'parent_category_id',
        'budgeted',
        'user_id',
    ];

    public function getSpentAttribute()
    {
        $spent = 0;
        foreach ($this->transactions()->get() as $transaction) {
            if ($transaction->inflow) {
                $spent -= $transaction->amount;
            } else {
                $spent += $transaction->amount;
            }
        }
        
        return $spent;
    }

    public function getMonthSpentAttribute()
    {
        $spent = 0;
        foreach ($this->transactions()->whereMonth('date', Carbon::now()->month)->get() as $transaction) {

            if ($transaction->inflow) {
                $spent -= $transaction->amount;
            } else {
                $spent += $transaction->amount;
            }
        }
        
        return $spent;
    }

    // public function getProgressAttribute()
    // {
    //     if ($this->budgeted == 0) {
    //         // no progress with no budget
    //         return 0;
    //     }

    //     return min(0, round(($this->spent / $this->budgeted) * 100));
    // }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
