<?php

namespace App\Filament\Widgets;

use App\Models\Application;
use App\Models\Beneficiary;
use App\Models\Team;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Applications', Application::count()),
            Stat::make('Total Beneficiaries', Beneficiary::count()),
            Stat::make('Total Member', Team::count()),
        ];
    }
}
