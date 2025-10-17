<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;

class UserChart extends ChartWidget
{
    public function getHeading(): string
    {
        return 'Estatísticas de Usuários';
    }

    protected function getData(): array
    {
        $totalUsers = User::count();
        $verifiedUsers = User::whereNotNull('ativo')->count();
        $unverifiedUsers = $totalUsers - $verifiedUsers;

        return [
            'datasets' => [
                [
                    'label' => 'Distribuição de Usuários',
                    'data' => [$verifiedUsers, $unverifiedUsers],
                    'backgroundColor' => [
                        '#10b981', // Verde para verificados
                        '#ef4444', // Vermelho para não verificados
                    ],
                    'borderColor' => [
                        '#0d9666',
                        '#dc2626',
                    ],
                    'borderWidth' => 2,
                ],
            ],
            'labels' => ['Verificados', 'Não Verificados'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }

protected function getOptions(): array
{
    return [
        'plugins' => [
            'legend' => [
                'display' => true,
                'position' => 'bottom',
            ],
        ],
    ];
}
}