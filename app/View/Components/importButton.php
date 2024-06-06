<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Livewire\WithFileUploads;

class importButton extends Component
{
    use WithFileUploads;

    public $csvFile;

    public function updatedCsvFile()
    {
        $this->validate([
            'csvFile' => 'required|mimes:csv,txt|max:10240', 
        ]);
    }

    public function upload()
    {
        $this->validate([
            'csvFile' => 'required|mimes:csv,txt|max:10240',
        ]);


        $path = $this->csvFile->store('uploads');

        session()->flash('message', 'CSV file uploaded successfully.');

        $this->reset('csvFile');

    }

    public function render(): View|Closure|string
    {
        return view('components.import-button');
    }
}
