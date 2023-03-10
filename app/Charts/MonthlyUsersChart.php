<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class MonthlyUsersChart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    } 
   
    public function build()
    {
        return $this->chart->LineChart()
            ->setTitle('Dia    Semana Mês  Ano')
            ->setSubtitle('Este mês vs Mês Passado')
            ->addData('Este mês', [40, 93, 35, 42])
            ->addData('Mês Passado', [70, 29, 77, 28])
            ->setXAxis(['Dia', 'Semana', 'Mês', 'Ano']);

    }
}
