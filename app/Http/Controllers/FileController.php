<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function show()
    {
        $food = Attachment::where('type', 'food')->get();
        $bakeries = Attachment::where('type', 'bakeries')->get();
        $drinks = Attachment::where('type', 'drinks')->get();
        return view('filedetails.file', [
            'food' => $food,
            'bakeries' => $bakeries,
            'drinks' => $drinks
        ]);
    }
}
