<?php

namespace App\Livewire;

use App\Jobs\ProcessReport;
use Livewire\Component;

class Report extends Component
{

    public string $status = 'idle';

    public array $statusColors = [
        '',
        '',
    ];

    public function processReport()
    {
        $this->statusColors[0] = 'bg-yellow-400';
        $this->statusColors[1] = 'bg-yellow-500';
        $this->status = 'processing';

        ProcessReport::dispatch(auth()->user()->id);
    }

    public function onReportProcessed()
    {
        $this->statusColors[0] = '';
        $this->statusColors[1] = " bg-green-500";
        $this->status = 'done';
    }

    public function getListeners()
    {
        return [
            'echo-private:Processed.Report.' . auth()->user()->id . ',ProcessedReport' => 'onReportProcessed',
        ];
    }

    public function render()
    {
        return view('livewire.report');
    }
}
