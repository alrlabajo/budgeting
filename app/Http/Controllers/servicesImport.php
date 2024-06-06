<?php

namespace App\Http\Controllers;

use App\Models\PersonalServices;
use Illuminate\Http\Request;

class servicesImport extends Controller
{
    public function import(Request $request)
    {
        $file = $request->file('file');
        $fileContents = file($file->getPathname());

        foreach ($fileContents as $line) {
            $data = str_getcsv($line);

            PersonalServices::create([
                'Account Code' => $data[0],
                'Items of Expenditure' => $data[1],
                'Budget' => $data[2],
                'Justification' => $data[3],

            ]);
        }

        return redirect()->back()->with('success', 'CSV file imported successfully.');
    }
}
