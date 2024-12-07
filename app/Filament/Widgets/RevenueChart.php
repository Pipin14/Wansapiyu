<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Customer;
use Illuminate\Support\Carbon;

class RevenueChart extends ChartWidget
{
    protected static ?string $heading = 'Monthly Revenue Chart';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $monthlyRevenue = Customer::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(harga_paket) as total')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get()
            ->mapWithKeys(function ($item) {
                $month = Carbon::create($item->year, $item->month, 1)->format('M Y');
                return [$month => $item->total];
            })
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Pendapatan Bulanan',
                    'data' => array_values($monthlyRevenue),
                    'backgroundColor' => '#2A3663',
                    'borderColor' => '#2A3663',
                ],
            ],
            'labels' => array_keys($monthlyRevenue),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
