<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Customer;

class GrowthChart extends ChartWidget
{
    protected static ?string $heading = 'Customer Growth per Month';

    protected function getData(): array
    {
        $customerData = Customer::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Customer Growth',
                    'data' => array_values($customerData),
                    'backgroundColor' => '#36A2EB',
                ],
            ],
            'labels' => array_map(function ($month) {
                return date('M', mktime(0, 0, 0, $month, 10));
            }, array_keys($customerData)),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
