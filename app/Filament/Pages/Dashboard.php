<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Filament\Widgets\CustomerChart;
use App\Filament\Widgets\StatsAdminOverview;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static string $view = 'filament.pages.dashboard';

    protected function getWidgets(): array
    {
        return [
            CustomerChart::class,
            StatsAdminOverview::class,
        ];
    }
}
