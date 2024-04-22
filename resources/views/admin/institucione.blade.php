@extends('layouts/template')


@include('layouts/header')
@include('layouts/sidebarAdmin')

@section('contenido')

    <div class="content-wrapper">
        <div class="row-md-12">
            <div class="col-md-12">
                <div class="card">
                    <h3>Instituciones y dependencias</h3> 

                    <p style="font-size: 50px;">
                        <a href="{{ url('usuario/create') }}" class="btn btn-lg" style="color: white; background-color: #6F0F9C;" role="button"><i class="fa-solid fa-folder-plus"></i> &nbsp; Registrar a nuevo usuario</a>
                    </p>

                <div class="card">

                <main>
                 <div class="container py-4">
                 <!-- <h2  style="text-align: center;"></h2> -->
                 <hr>
                <table class="table table-hover">
                    <thead>
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Nombre Usuario</th>
                        <!-- <th scope="col">CURP</th> -->
                        <th scope="col">Contraseña</th>
                        <th scope="col">Institucion</th>
                        <!-- <th scope="col">Portada</th> -->
                        <th scope="col"></th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                        <tbody>
                            
                        <tr>
                                    <th>1</th>
                                    <td>Laura </td>
                                    <td>Laura Gonzales</td>
                                    <td>12345678</td>
                                    <td>INEGI</td>
                                    
                                </tr>
                           
                           
                    </tbody>
                </table>
            </div>
        </main>
    </div>


                    @guest
                    <p>Para ver el contenido inicie sesión <a class="link" href="/inicioSesion">Iniciar sesión</a></p>
                    @endguest
                
                </div>
                
            </div>
        </div>
    </div>

@endsection