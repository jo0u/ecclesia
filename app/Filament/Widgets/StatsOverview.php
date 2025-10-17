<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $totalUsers = User::count();
        $verifiedUsers = User::whereNotNull('ativo')->count();
        $newThisWeek = User::where('created_at', '>=', now()->subWeek())->count();

        return [
            Stat::make('Total de Usuários', $totalUsers)
                ->description('Sistema completo')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17]) // Gráfico mini
                ->extraAttributes([
                    'class' => 'cursor-pointer',
                ]),

            Stat::make('Usuários Verificados', $verifiedUsers)
                ->description('E-mail confirmado')
                ->descriptionIcon('heroicon-o-check-badge')
                ->color('info')
                ->descriptionColor($verifiedUsers > 0 ? 'success' : 'danger'),

            Stat::make('Novos Esta Semana', $newThisWeek)
                ->description('Cadastros recentes')
                ->descriptionIcon('heroicon-o-arrow-trending-up')
                ->color('warning'),

                
        ];
    }
}