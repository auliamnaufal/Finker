<?php

namespace App\Http\Livewire;

use App\Models\Transaction;
use Asantibanez\LivewireCharts\Models\PieChartModel;
use Livewire\Component;

class DashboardBreakdown extends Component
{
    public $expenseTotal;
    public $incomeTotal;

    protected $listeners = ['transactionCreated' => 'updateChart'];

    public function mount() {
        $this->expenseTotal = (int)Transaction::where('type', 'expense')->sum('amount');
        $this->incomeTotal = (int)Transaction::where('type', 'income')->sum('amount');
    }

    public function updateChart() {
        $this->expenseTotal = (int)Transaction::where('type', 'expense')->sum('amount');
        $this->incomeTotal = (int)Transaction::where('type', 'income')->sum('amount');
    }

    public function render()
    {

        $pieChartModel =
            (new PieChartModel())
                ->addSlice('Expenses', $this->expenseTotal, 'rgb(248, 180, 180)')
                ->addSlice('Income', $this->incomeTotal, 'rgb(132, 225, 188)')
                ->setType('donut')
                ->withoutLegend()
                ->withDataLabels();

        return view('livewire.dashboard-breakdown', [
            'pieChartModel' => $pieChartModel
        ]);
    }
}
