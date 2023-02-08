<?php

namespace App\Http\Controllers;

use App\Models\cotizacion;
use Illuminate\Http\Request;
use Carbon\Carbon;
class cotizacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function datos() {
        $cotizaciones = cotizacion::all();
        return $cotizaciones;
    }
}