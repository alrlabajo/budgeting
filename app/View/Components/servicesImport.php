<?php

namespace App\View\Components;

use App\Models\PersonalServices;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\View\Components\View;
use Illuminate\Support\Facades\Storage;

class servicesImport extends Component
{
    use WithFileUploads;

    public $csvFile;

    public function upload()
    {
        $this->validate([
            'csvFile' => 'required|file|mimes:csv,txt',
        ]);

        $filePath = $this->csvFile->store('csv-files');
        $file = fopen(storage_path('app/' . $filePath), 'r');

        while (($line = fgets($file)) !== false) {
            $row = explode(',', $line);
            PersonalServices::create([
                'Account Code' => $row[0],
                'Items of Expenditure' => $row[0],
                'Budget' => $row[0],
                'Justification' => $row[0],
            ]);
        }

        fclose($file);

        session()->flash('message', 'File uploaded and processed successfully.');


        $this->reset('csvFile');
    }

    public function render()
    {
        return view('components.services-import');
    }
}
