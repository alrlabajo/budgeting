<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePDF()
    {
        /*$users = User::get();

        $data = [
            'title' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('pdf.usersPdf', $data);
        return $pdf->download('users-lists.pdf');*/
    }
}
