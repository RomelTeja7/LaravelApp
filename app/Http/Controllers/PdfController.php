<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{
    public function generatePdf($id)
    {
        try {
            $projects = DB::select("SELECT * FROM proyectos where Id = $id");
        } catch (\Exception $e) {
            return back()->with("error", "Ocurrio un error.");
        }

        $data = [
            'title' => 'Gobierno de El Salvador',
            'date' => date('d/m/Y'),
            'proyectos' => $projects
        ];
        $pdf = Pdf::loadView('generate-pdf', $data);
        return $pdf->stream('datos.pdf');
    }
}
