@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row align-items-center">
    <div class="col-md-4">
        <h1 class="fs-3 fw-bold">Busqueda de Usuario</h1>
    </div><!--.col-->
    <div class="col-md-8">
        <form action="{{ route('users') }}" method="get" class="row row-cols-lg-auto ">
        <div class="form-group px-1">
            <input type="text" class="form-control form-control-sm"  name="name" placeholder="Nombre">
        </div>

        <div class="form-group px-1">
            <input type="text" class="form-control form-control-sm"  name="email" placeholder="Email">
        </div>

        <div class="form-group px-1">
            <input type="text" class="form-control form-control-sm"  name="bio" placeholder="Biografia">
        </div>

        <div class="form-group px-1">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="bi bi-search"></i>
            </button>
        </div>
        </form>
    </div><!--.col-->
</div><!--.row-->
<hr>



</div>
@endsection