<?php

namespace App\Filament\Widgets;

use App\Models\Santri;
use App\Models\Guru;
use App\Models\Prestasi;
use App\Models\Pelanggaran;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Santri', Santri::count()),
            Stat::make('Total Guru', Guru::count()),
            Stat::make('Total Prestasi', Prestasi::count()),
            Stat::make('Total Pelanggaran', Pelanggaran::count()),
        ];
    }
}
