<?php

// app/Http/Controllers/PrescriptionController.php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display the print view for a prescription.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\View\View
     */
    public function print(Prescription $prescription)
    {
        // Load the view to format the prescription for printing
        return view('prescriptions.print', compact('prescription'));
    }
}
