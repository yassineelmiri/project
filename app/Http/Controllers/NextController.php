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

        // Récupérer les données de la facture

        // Créer une instance de Dompdf
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);

        // Générer le contenu HTML de la facture (vous pouvez utiliser une vue pour le formatage)
        $html = view('invoices.pdf', compact('invoice'))->render();

        // Charger le contenu HTML dans Dompdf
        $dompdf->loadHtml($html);

        // Rendre le PDF
        $dompdf->render();

        // Retourner le PDF en tant que réponse HTTP
        return $dompdf->stream('invoices.print');
    }
}
