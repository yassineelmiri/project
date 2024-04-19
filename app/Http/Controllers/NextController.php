<?php

namespace App\Http\Controllers;

use App\Models\reservations;
use App\Models\room;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;

class NextController extends Controller
{
    public function contact()
    {
        return view('contact.index');
    }

    public function show($profile_id)
    {
        $invoice = reservations::findOrFail($profile_id);
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $html = view('invoices.pdf', compact('invoice'))->render();
        $dompdf->loadHtml($html);
        $dompdf->render();
        return $dompdf->stream('invoices.print');
    }
}
