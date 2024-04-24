<?php

namespace App\Http\Controllers;
use App\Models\Auths;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = Auths::get();

        $data = [
            'title' => 'Welcome to Funda of Web IT - fundaofwebit.com',
            'date' => date('m/d/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('pdf.usersPdf', $data);
        return $pdf->download('users-lists.pdf');
    }
}