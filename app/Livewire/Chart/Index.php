<?php

namespace App\Livewire\Chart;

use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Index extends Component
{
    public function render()
    {
        $columnChartModel = (new ColumnChartModel())
                ->setTitle('Terverifikasi DJKI')
                ->addColumn('Paten', 100, '#f6ad55')
                ->addColumn('Hak Cipta', 400, '#fc8181')
                ->addColumn('Desain Indrusti', 30, '#90cdf4');

        return view('livewire.chart.index')
            ->with([
                'columnChartModel'=>  $columnChartModel
            ]);
    }
}
