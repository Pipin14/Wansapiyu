<?php

namespace App\Filament\Widgets;

use App\Models\Customer;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Illuminate\Support\Carbon;

class StatsAdminOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalCustomers = Customer::count();
        $totalRevenue = Customer::sum('harga_paket');
        $customerGrowth = $this->getCustomerGrowth();
        $revenueGrowth = $this->getRevenueGrowth();
        $monthlyCustomerCounts = $this->getMonthlyCustomerCounts();

        return [
            Stat::make('Total Customers', $totalCustomers)
                ->description(($customerGrowth >= 0 ? '+' : '') . $customerGrowth . ' increase')
                ->descriptionIcon($customerGrowth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($customerGrowth >= 0 ? 'success' : 'danger')
                ->chart(array_values($monthlyCustomerCounts)),

            Stat::make('Total Revenue', 'Rp' . number_format($totalRevenue, 0, ',', '.'))
                ->description(($revenueGrowth >= 0 ? '+' : '') . round($revenueGrowth, 2) . '% growth')
                ->descriptionIcon($revenueGrowth >= 0 ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($revenueGrowth >= 0 ? 'success' : 'danger'),

            Stat::make('Monthly Customer Growth', array_sum($monthlyCustomerCounts))
                ->description('Growth shown in chart')
                ->color('info')
                ->chart(array_values($monthlyCustomerCounts)),
        ];
    }

    /**
     * Hitung pertumbuhan pelanggan dibandingkan bulan lalu.
     *
     * @return int
     */
    private function getCustomerGrowth(): int
    {
        $currentMonthStart = now()->startOfMonth();
        $previousMonthStart = now()->subMonth()->startOfMonth();

        $currentCustomerCount = Customer::whereBetween('created_at', [$currentMonthStart, now()->endOfMonth()])->count();
        $previousCustomerCount = Customer::whereBetween('created_at', [$previousMonthStart, $previousMonthStart->endOfMonth()])->count();

        if ($previousCustomerCount === 0) {
            return $currentCustomerCount;
        }

        return $currentCustomerCount - $previousCustomerCount;
    }

    /**
     * Hitung pertumbuhan revenue dibandingkan bulan lalu.
     *
     * @return float
     */
    private function getRevenueGrowth(): float
    {
        $currentMonthStart = now()->startOfMonth();
        $previousMonthStart = now()->subMonth()->startOfMonth();

        $currentRevenue = Customer::whereBetween('created_at', [$currentMonthStart, now()->endOfMonth()])->sum('harga_paket');
        $previousRevenue = Customer::whereBetween('created_at', [$previousMonthStart, $previousMonthStart->endOfMonth()])->sum('harga_paket');

        if ($previousRevenue === 0) {
            return $currentRevenue > 0 ? 100 : 0;
        }

        return (($currentRevenue - $previousRevenue) / $previousRevenue) * 100;
    }

    /**
     * Ambil jumlah pelanggan per bulan.
     *
     * @return array
     */
    private function getMonthlyCustomerCounts(): array
    {
        $monthlyCustomerCounts = Customer::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, COUNT(*) as count')
            ->groupBy('year', 'month')
            ->orderBy('year')
            ->orderBy('month')
            ->get()
            ->mapWithKeys(function ($item) {
                $month = Carbon::create($item->year, $item->month, 1)->format('M Y');
                return [$month => $item->count];
            })
            ->toArray();

        ksort($monthlyCustomerCounts);
        return $monthlyCustomerCounts;
    }
}
