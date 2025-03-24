<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class TestComponent extends Component
{
    public $latestData = 'Waiting for data...';

    protected $listeners = ['dataUpdated' => 'updateData'];

    public function mount()
    {
        $this->latestData = Cache::get('latest_esp_data', 'Waiting for data...');
    }

    public function updateData($message)
    {
        $this->latestData = $message;
    }

    public function render()
    {
        $this->latestData = Cache::get('latest_esp_data', 'Waiting for data...');
        return view('livewire.test-component');
    }
}
