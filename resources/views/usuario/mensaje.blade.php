@extends('layouts/template')


@include('layouts/headerUser')
@include('layouts/sidebarUser')

@section('contenido')

      <div class="content-wrapper">
      <div class="row-md-12">
      <div class="col-md-12">
      <div class="card mb-5">

@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

</div>
</div>
</div>
</div>

       
@endsection
