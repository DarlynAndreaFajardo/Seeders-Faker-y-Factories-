@extends('welcome')
@section('contenidos')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-1">Proveedores</h2>
           
            <table class="table table-bordered table-striped text-center">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Ciudad</th>
    
                </tr>
                </thead>

                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        
                    </tr>
                @endforeach

                </tbody>

            </table>
            {{ $users->links() }}

        </div>
    </div>
</div>
@endsection