<?php

namespace App\Filament\Widgets;

use App\Models\VisitorLog;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VisitorStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [
        Stat::make('Total Kunjungan', VisitorLog::count()),
        Stat::make('Hari Ini', VisitorLog::whereDate('created_at', today())->count()),
        Stat::make('IP Unik', VisitorLog::select('ip_address')->distinct()->count()),
        ];
    }
}
