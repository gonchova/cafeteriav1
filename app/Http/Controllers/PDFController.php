<?php
namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;


class PDFController extends Controller{

	public function getPDF(){

        $detallepedido= DB::table('pedidos')
        ->join('productos', 'pedidos.idproducto', '=', 'productos.id')
        ->where('idusuario','=',auth()->user()->id)
        ->where('estado','=', 'I')
        ->select('pedidos.id', 'pedidos.idproducto','productos.descripcion', 'pedidos.tamanio','pedidos.cantidad')
        ->get();
		
		$pdf = PDF::loadView('pdf', compact('detallepedido'));
		
        //$data = PDF::loadView('pdf', compact('detallepedido'))->setPaper('a4')->setWarnings(false)->stream('prueba.pdf');
        //$data->save('folder_name/'.$name)
        //return redirect('/index');
        $pdf->stream('prueba.pdf');

       
	}
}