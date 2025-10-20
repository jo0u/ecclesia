<?php

namespace App\Filament\Widgets;

use App\Models\User;
use App\Models\Pessoa;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalUsers = Pessoa::count();
        $verifiedUsers = User::whereNotNull('ativo')->count();
        $newThisWeek = Pessoa::where('created_at', '>=', now()->subWeek())->count();

        return [
            Stat::make('Total de Membros', $totalUsers)
                ->description('Sistema completo')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]) // Gráfico mini
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            Stat::make('Novos Membros Esta Semana', $newThisWeek)
                ->description('Cadastros recentes')
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->color('warning'),

                
        ];
    }
}