@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cafeteria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../css/estilos.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        
    </head>

    <body class="antialiased">
        <?php
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        ?>
        <div class="relative d-flex flex-column items-top justify-center  items-center py-4 sm:pt-0">

            <form class="form-horizontal border border-3 rounded-3 shadow-lg"  action="{{route('crearLineaPedido')}}" method="POST" >   
               @csrf
                <div class="row justify-center py-1">
                    <img src="/img/cafeter??a-logo.png" style="width:115px">
                </div>
                <div class="row">
                    <div class="col">

                            <div class="row justify-center mx-5 text-dark">
                                <p class="text-white bg-dark mx-auto">Seleccione un producto</p>
                            </div>
                            
                            <div class="form-group position-relative">
                                <div class="form-group required col-auto  px-3 ">
                                    <select class="form-select" name="producto"  id ="producto" onclick="getOption()">
                                        @if(count($productos))
                                        @foreach($productos as $prod)
                                            <option value="{{$prod->id}}" id="{{$prod->precio}}">{{$prod->descripcion}} </option>
                                        @endforeach
                                        @endif
                                    </select>
                                </div>
                                <br>
                                <div class="row justify-center mx-5 px-5 text-dark">
                                    <p class="text-white bg-dark justify-center">Cantidad</p>
                                </div>
                                <div class="form-group required col-auto px-5">
                                    <select class="form-select" name="cantidad" id="cantidad" onclick="getOption()">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                        

                                <div class="row">
                                    <div class="col relative flex items-top justify-center py-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tamanio" id="tamaniochico" value="1" onclick="getOption()" checked >
                                            <label class="form-check-label" for="tamaniochico">
                                            Chico
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tamanio" id="tamaniomediano" onclick="getOption()" value="2">
                                            <label class="form-check-label" for="tamaniomediano">
                                            Mediano
                                            </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="tamanio" id="tamaniogrande" onclick="getOption()"  value="3">
                                            <label class="form-check-label" for="tamaniogrande">
                                            Grande
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-center mx-5 px-5 text-dark">
                                <p id = "precioDesc" class="text-white bg-dark justify-center"> </p> 
                                
                            </div>

                            <div class="row mx-2">
                                <button type="submit" name="btnAgregar" class="btn btn-primary my-2  justify-center " >Agregar</button>
                            </div>
                          
                    </div>
                </div>

                    @if (session('mensaje'))
                    <div class="alert alert-success">{{session('mensaje')}}</div>
                    @endif
        
                    @if(count($errors)>0)
                        @foreach($errors->all() as $err)
                            <div class="alert alert-danger my-1" >{{$err}}</div>
                        @endforeach
                    @endif
                </form>   
           
                <div class="relative d-flex flex-column justify-center   items-center  sm:pt-0">     
                    <table id = "tablaItems" class="table table-default table-hover table-bordered caption-top table-sm align-middle " >
                        <caption class="mx-auto fw-bold fs-2 text-center ">Items del Pedido</caption>
                        <thead class="table-secondary header-col">
                            <tr class="wx-auto">
                                <th scope="col fw-1" style="width: 10% ;display: none;" >idusuario</th>
                                <th scope="col" style="width: 30%">Descripcion</th>
                                <th scope="col" style="width: 30%">Tama??o</th>
                                <th scope="col" style="width: 10%">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr>
                                @foreach($detallepedido as $ped)
                                    <tr  class="text-dark">    
                                        <th scope="row " style="display: none;">{{$ped->id}}</th>
                                            <td>{{$ped->descripcion}}</td>
                                            <td>{{$ped->tamanio}}</td>
                                            <td>{{$ped->cantidad}}</td>     
                                            <td>
                                                <form name="form-elimina-pedido" action="{{route('EliminarLineaPedido', $ped->id)}}" method="POST">    
                                                    @csrf 
                                                    @method('DELETE')
                                                    <button type="submit"  name="btnEliminar" class="btn btn-danger" value="#">X</button>
                                                </form>
                                            </td> 
                                    </tr> 
                                @endforeach    
                            </tr>
                        </tbody>
                    </table>
          
                    <div class="row mx-2">
                        <form name="form-confirma-pedido"  action="{{route('getPDF')}}" method="GET">    
                            <button type="submit"  name="btnConfirmar" class="btn btn-primary my-2  justify-center">Realizar Pedido</button>
                        </form>
                    </div>


                </div>   
       
        </div>
    </body>
        
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script-->
    
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    
    <script>

        $(document).ready(function(){  

           $('[name=btnConfirmar]').click(function(event){
         
                let tabla = document.getElementById('tablaItems');
                let tfilas = tabla.getElementsByTagName('tbody')[0]; 
                
                if(tfilas.children.length<=1)
                {   alert('Debe seleccionar al menos un producto');
                    event.preventDefault();
                }

            });
              

            if (window.history.replaceState) { // verificamos disponibilidad
                window.history.replaceState(null, null, window.location.href);
            }

        });



                    
       </script>  
       
       <script type="text/javascript">

        function getOption() {
            selectElement = document.querySelector('#producto');
            precioDesc = document.getElementById('precioDesc');
            cant = document.getElementById('cantidad').value;

            tam =  document.getElementsByName('tamanio');
            
            tam.forEach((tama) => {
                if (tama.checked) {
                    tamanio=tama.value;
                }
        })

        precioDesc.innerText = 'Precio: $'+ ((selectElement.options[selectElement.selectedIndex].id * cant) + (parseInt(tamanio) * 4 * cant) );

            
            //document.querySelector('.output').textContent = output;
        }
        </script>


</html>
@endsection
