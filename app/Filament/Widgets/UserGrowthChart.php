<?php

namespace App\Filament\Widgets;

use App\Models\Pessoa;
use Filament\Widgets\ChartWidget;

class UserGrowthChart extends ChartWidget
{
    public function getHeading(): string
    {
        return 'Crescimento de Membros';
    }

    protected function getData(): array
    {
        // Dados reais simples
        $totalUsers = Pessoa::count();
        //$verifiedUsers = Pessoa::whereNotNull('ativo')->count();
        $newThisMonth = Pessoa::whereMonth('created_at', now()->month)->count();
        $newLastMonth = Pessoa::whereMonth('created_at', now()->subMonth()->month)->count();

        return [
            'datasets' => [
                [
                    'label' => 'Membros',
                    'data' => [$totalUsers, $newThisMonth, $newLastMonth],
                    'backgroundColor' => [
                        '#3b82f6', // Total
                        '#f59e0b', // Este mês
                        '#ef4444', // Mês passado
                    ],
                ],
            ],
            'labels' => ['Total', 'Este Mês', 'Mês Passado'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}