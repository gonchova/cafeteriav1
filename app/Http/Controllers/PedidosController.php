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
     // $detallepedido=Pedido::where('idusuario','=',auth()->user()->id)->get();

      $detallepedido= DB::table('pedidos')
      ->join('productos', 'pedidos.idproducto', '=', 'productos.id')
      ->where('idusuario','=',auth()->user()->id)
      ->where('estado','=', 'P')
      ->select('pedidos.id', 'pedidos.idproducto','productos.descripcion', 'pedidos.tamanio','pedidos.cantidad')
      ->get();
     
      return view("pedidos.pedido",compact("productos","detallepedido"));
    }

    public function listarProductos()
    {  

        $productos= Producto::all();
        
        return (compact("productos"));
        
    }
    
    public function crearLineaPedido(Request $request)
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
                        'idusuario' => auth()->user()->id,
                        'estado' => 'P' //P= pendiente, C= Confirmado (para armar)
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
            $productos= Producto::all();
         //   $detallepedido=Pedido::where('idusuario','=',auth()->user()->id)->get();
           $detallepedido= DB::table('pedidos')
           ->join('productos', 'pedidos.idproducto', '=', 'productos.id')
           ->where('idusuario','=',auth()->user()->id)
           ->where('estado','=', 'P')
           ->select('pedidos.id', 'pedidos.idproducto','productos.descripcion', 'pedidos.tamanio','pedidos.cantidad')
           ->get();
           
            return view("pedidos.pedido",compact("productos","detallepedido"));
            //return back()->with('mensaje', 'Pedido generado exitosamente!');
        }
        else{
           // return view("pedidos.pedido",compact("productos","detallepedido"));
            return back()->withErrors('Sin stock del producto seleccionado');
        }

    }


    public function EliminarLineaPedido(Pedido $pedido)
    {     
      $detallepedido= Pedido::findorfail($pedido->id);
    
      DB::table('stocks')->where('idproducto',$detallepedido->idproducto)->increment('cantidad',$detallepedido->cantidad);
    
      $detallepedido->delete();
      $productos= Producto::all();

      $detallepedido= DB::table('pedidos')
      ->join('productos', 'pedidos.idproducto', '=', 'productos.id')
      ->where('idusuario','=',auth()->user()->id)
      ->where('estado','=', 'P')
      ->select('pedidos.id', 'pedidos.idproducto','productos.descripcion', 'pedidos.tamanio','pedidos.cantidad')
      ->get();
      //return back()->compact("productos","detallepedido");
      return back()->with(compact("productos","detallepedido"));
    }

    public function ConfirmarPedido()
    {  
        $detallepedido= DB::table('pedidos')
        ->join('productos', 'pedidos.idproducto', '=', 'productos.id')
        ->where('idusuario','=',auth()->user()->id)
        ->where('estado','=', 'P')
        ->select('pedidos.id', 'pedidos.idproducto','productos.descripcion', 'pedidos.tamanio','pedidos.cantidad')
        ->get();

        DB::transaction(function () 
        {
            DB::table('pedidos')
            ->where('idusuario','=',auth()->user()->id)
            ->where('estado','=', 'P')
            ->update(['estado' => 'C']);
        });

       return view("pedidos.pdf",compact('detallepedido'));
       
    }

}


