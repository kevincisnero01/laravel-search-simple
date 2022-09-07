@extends('layouts.app')
@section('content')
<div class="container-fluid">
<div class="row align-items-center">
    <div class="col-md-4">
        <h1 class="fs-3 fw-bold">Busqueda de Usuario</h1>
    </div><!--.col-->
    <div class="col-md-8">
        <form action="{{ route('users.index') }}" method="get" class="row row-cols-lg-auto ">
        <div class="form-group px-1">
            <input type="text" class="form-control form-control-sm"  name="name" value="{{$name}}" placeholder="Nombre">
        </div>

        <div class="form-group px-1">
            <input type="text" class="form-control form-control-sm"  name="email" value="{{$email}}" placeholder="Email">
        </div>

        <div class="form-group px-1">
            <input type="text" class="form-control form-control-sm"  name="bio"  value="{{$bio}}" placeholder="Biografia">
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
<div class="row">
    <div class="col-10 mx-auto">
        <table class="table table-hover table-stripped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Biografia</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->bio }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $users->links() }}
        </div>
        
    </div>
</div>


</div>
@endsection