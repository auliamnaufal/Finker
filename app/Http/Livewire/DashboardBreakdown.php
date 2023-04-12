<?php

namespace App\Http\Livewire;

use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class DashboardBreakdown extends Component
{
    public function render()
    {
        $pieChartModel =
            (new PieChartModel())
                ->addSlice('Food', 100, 'rgb(248, 180, 180)')
                ->addSlice('Shopping', 200, 'rgb(132, 225, 188)')
                ->setType('donut')
                ->withoutLegend()
                ->withDataLabels();

        return view('livewire.dashboard-breakdown', [
            'pieChartModel' => $pieChartModel
        ]);
    }
}
