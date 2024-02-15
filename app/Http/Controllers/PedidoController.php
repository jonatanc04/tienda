<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Pedido;
use App\Models\LineasPedido;
use Carbon\Carbon;

class PedidoController extends Controller
{
    public function confirmarPedido()
    {
        $api = 'http://carrito/api/carrito/confirmarPedido/'.auth()->user()->id;
        $response = Http::withToken('1234')->delete($api);

        $pedido = new Pedido();
        $pedido->fecha = Carbon::now()->format('Y-m-d H:i:s');
        $pedido->dniCliente = auth()->user()->id;
        $pedido->save();

        $i = 1;

        $data = $response->json();

        foreach ($data as $item) {
            $linea = new LineasPedido();
            $linea->id = $pedido->id;
            $linea->nLinea = $i;
            $linea->idProducto = $item['idProducto'];
            $linea->cantidad = $item['cantidad'];
            $linea->save();
            $i++;
        }

        return redirect()->route('tienda.index');
    }
}