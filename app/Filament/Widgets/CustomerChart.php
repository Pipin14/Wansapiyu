<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Customer;

class CustomerChart extends ChartWidget
{
    protected static ?string $heading = 'Total Customer Chart';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $customerData = Customer::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('month')
            ->pluck('count', 'month')
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Customer Orders',
                    'data' => array_values($customerData),
                    'backgroundColor' => '#36A2EB',
                    'borderColor' => '#9BD0F5',
                ],
            ],
            'labels' => array_map(function ($month) {
                return date('M', mktime(0, 0, 0, $month, 10));
            }, array_keys($customerData)),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
