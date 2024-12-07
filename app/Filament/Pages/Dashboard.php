<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\GrowthChart;
use App\Filament\Widgets\RevenueChart;
use App\Filament\Widgets\CustomerChart;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';

    protected function getWidgets(): array
    {
        return [
            CustomerChart::class,
            GrowthChart::class,
        ];
    }
}
