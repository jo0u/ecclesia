<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;

class UserGrowthChart extends ChartWidget
{
    public function getHeading(): string
    {
        return 'Crescimento de Usuários';
    }

    protected function getData(): array
    {
        // Dados reais simples
        $totalUsers = User::count();
        $verifiedUsers = User::whereNotNull('email_verified_at')->count();
        $newThisMonth = User::whereMonth('created_at', now()->month)->count();
        $newLastMonth = User::whereMonth('created_at', now()->subMonth()->month)->count();

        return [
            'datasets' => [
                [
                    'label' => 'Usuários',
                    'data' => [$totalUsers, $verifiedUsers, $newThisMonth, $newLastMonth],
                    'backgroundColor' => [
                        '#3b82f6', // Total
                        '#10b981', // Verificados
                        '#f59e0b', // Este mês
                        '#ef4444', // Mês passado
                    ],
                ],
            ],
            'labels' => ['Total', 'Verificados', 'Este Mês', 'Mês Passado'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}