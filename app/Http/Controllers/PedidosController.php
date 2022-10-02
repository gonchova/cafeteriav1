<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use App\Models\Pedido;
use App\Models\Stock;

class PedidosController extends Controller
{
    public function index()
    {
      $productos= Producto::all();
      
      return view("pedidos.pedido",compact("productos"));
    }

    public function listarProductos()
    {  

        $productos= Producto::all();
        
        return (compact("productos"));
        
    }
    
    public function crear(Request $request)
    {  
        //return $request;
        $errores = false;
        $canpedido=$request->cantidad;
        
        $stockDisponible= Stock::where('cantidad','>=', $canpedido) 
        ->where('idproducto',$request->producto)->get();

         //dd($stockDisponible->isEmpty());
        if ($stockDisponible->isEmpty() || $stockDisponible == '0' )        {
            return back()->withErrors('Sin stock del producto seleccionado'.$errores);
        }
        else
        {   $cantstock = $stockDisponible[0]->cantidad;

            DB::transaction(function () use ($request,  $cantstock, $canpedido)
            {   //Si hay stock continua y crea el pedido

                if($cantstock>= $canpedido){

                    Pedido::insert([
                        'idproducto' => $request->producto,
                        'tamanio' => $request->tamanio,
                        'cantidad'=>$canpedido,
                        'idusuario' => auth()->user()->id
                        ]);
                    
                    DB::table('stocks')->where('idproducto',$request->producto)
                        ->update(['cantidad' => $cantstock -  $canpedido ]);

                }
                else
                {
                    $errores = true;
                }
                
            });
        }

        if ($errores == false){
            return back()->with('mensaje', 'Pedido generado exitosamente!');
        }
        else{
            return back()->withErrors('Sin stock del producto seleccionado');
        }

    }

}


