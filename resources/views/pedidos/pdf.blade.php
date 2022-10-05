<!DOCTYPE html>
<html lang="en">
    <?php 
  
    $total=0;
    ?>
  <head>
    <meta charset="utf-8">
    <title>Ticket</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <div id="logo">
        <img src="img/iconocafe.jpg" style="width:115px">
    </div>
    <header class="clearfix">
      <h1>Ticket de pedido</h1>
      <div id="company" class="clearfix">
      </div>
    </header>
    <main>
      <table width="200">
        <thead>
          <tr>
            <th class="desc" >DESCRIPCION</th>
            <th >PRECIO</th>
            <th >CANTIDAD</th>
            <th >TOTAL</th>
          </tr>
        </thead>
        <tbody>

            <tbody class="">
                <tr>
                    @foreach($detallepedido as $ped)
                        <tr  class="text-dark">    
                            <td class="desc" width="0%">{{$ped->descripcion}}</td>
                            <td class="unidad" width="0%">{{$ped->tamanio}}</td>
                            <td class="cantidad" width="0%">{{$ped->cantidad}}</td>
                            <td class="total" width="0%">{{$ped->cantidad}}</td>
                        </tr> 
                        <?php $total= $total + $ped->cantidad   ?>
                    @endforeach    
                </tr>
            </tbody>


          <tfoot>
            <td colspan="3" class="preciofinal">PRECIO FINAL</td>
            <td class="preciofinal">{{$total}}</td>
          </tfoot>
        </tbody>
      </table>
    </main>
    
    <label class="text-center">GRACIAS POR ELEGIRNOS!</label>
    
  </body>
</html>