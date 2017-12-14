<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoCombustible;
use App\TipoVehiculo;
use App\VehiculoMarca;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function getTipoCombustible()
    {
        $registros = TipoCombustible::all();
        return view('TipoCombustible.lista')->with('data', $registros);
    }
    public function postTipoCombustibleAgregar(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:100',
        ]);
        $id = $request->id;
        if ($id == 0) {
            $tipoCombustible = new TipoCombustible;
        } else {
            $tipoCombustible = TipoCombustible::find($id);
        }
        $tipoCombustible->descripcion = $request->descripcion;
        $tipoCombustible->save();
        return redirect()->route('tc_lista');
    }

    public function getTipoVehiculo()
    {
        $registros = TipoVehiculo::all();
        return view('TipoVehiculo.lista')->with('data', $registros);
    }
    public function postTipoVehiculoAgregar(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:100',
        ]);
        $id = $request->id;
        if ($id == 0) {
            $tipoVehiculo = new TipoVehiculo;
        } else {
            $tipoVehiculo = TipoVehiculo::find($id);
        }
        $tipoVehiculo->descripcion = $request->descripcion;
        $tipoVehiculo->save();
        return redirect()->route('tv_lista');
    }

    public function getVehiculoMarca()
    {
        $registros = VehiculoMarca::all();
        return view('VehiculoMarca.lista')->with('data', $registros);
    }
    public function postVehiculoMarcaAgregar(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:100',
            'logo' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:5120',
        ]);
        $id = $request->id;
        if ($id == 0) {
            $vehiculoMarca = new VehiculoMarca;
        } else {
            $vehiculoMarca = VehiculoMarca::find($id);
        }
        $vehiculoMarca->descripcion = $request->descripcion;
        if ($request->hasFile('logo')) {
            $imageName = time().'.'.request()->logo->getClientOriginalExtension();
            request()->logo->move(public_path('uploads/marca-vehiculo'), $imageName);
            $vehiculoMarca->logo = $imageName;
        }
        $vehiculoMarca->save();
        return redirect()->route('vmar_lista');
    }
}
