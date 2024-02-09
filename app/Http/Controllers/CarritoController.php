<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Producto;

class CarritoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',
        ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $api = 'http://carrito/api/carrito';
        $productos = Producto::get();
        $response = Http::withToken('1234')->get($api, [
            "idCliente" => auth()->user()->id
        ]);
        $carrito = json_decode($response->body(),true);
        return view('carrito.index', compact('carrito', 'productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $api = 'http://carrito/api/carrito';
        $response = Http::withToken('1234')->post($api, [
            'idCliente' => $request->get('idCliente'),
            'idProducto' => $request->get('idProducto'),
            'cantidad' => $request->get('cantidad')
        ]);

        $productos = Producto::get();
        return view('tienda.index', compact('productos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
