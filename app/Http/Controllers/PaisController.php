<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pais;
use App\Models\EstadoFederativo;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paises = Pais::with('estados')->get();
        $estados = EstadoFederativo::all();

        return view('paises')->with('paises',$paises)->with('estados',$estados);
    }

    public function getEstados($id)
    {

        return EstadoFederativo::where('FKPais',$id)->get();
    }
}
