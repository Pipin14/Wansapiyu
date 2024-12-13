<?php

namespace App\Filament\Pages;

use Closure;

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

    public function handle($request, Closure $next)
    {
        if ($request->path() === 'admin' || $request->path() === 'admin/dashboard') {
            return redirect()->route('filament.pages.dashboard');
        }

        return $next($request);
    }
}
