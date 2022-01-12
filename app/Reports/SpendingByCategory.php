<?php

namespace App\Reports;

use App\Models\Transaction;
use DateInterval;
use DateTime;

class SpendingByCategory implements Reportable
{
    public function name()
    {
        return 'spending_by_category';
    }

    public function forDateRange($startDate = null, $endDate = null)
    {
        // If no start date, initialize to 1 year ago
        if (! $startDate) {
            $startDate = new DateTime(date('Y-m-d'));
            $monthInterval = new DateInterval('P1M');
            $monthInterval->invert = 1;
            $startDate->add($monthInterval);
        }
        // If no end date, initialize to now
        if (! $endDate) {
            $endDate = new DateTime(date('Y-m-d'));
        }
        // Limit it to our date range and group by category
        $results = Transaction::selectRaw('SUM(amount) AS total, categories.label AS category')
                        ->whereBetween('date', [$startDate->format('Y-m-d'), $endDate->format('Y-m-d 23:59:59')])
                        ->groupBy('transactions.category_id')
                        ->join('categories', 'category_id', '=', 'categories.id')
                        ->orderByDesc('total')
                        ->get();

        return [
            'labels' => $results->pluck('category'),
            'datasets' => $results->pluck('total')->map(function ($total) {
                return (float)$total;
            }),
        ];
    }
}
