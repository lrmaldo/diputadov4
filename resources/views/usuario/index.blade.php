@extends('layouts.dashboardIndex')
    @section('content')

    <?php $message=Session::get('message');?>
    @if($message == 'store')

    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Usuario creado</strong> Exitosamente.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Email</th>
                                                <th>Operación</th>
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            @foreach($users as $user)
                                            <tr>
                                
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>

                                                <td>    
                                                    <a href="{{ url('/usuario/' . $user->id . '/edit') }}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i> Editar </a>
                                                    
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#exampleModal"> <i class="far fa-trash-alt"></i>
                                                        Eliminar
                                                        </button>
                                                     
                                                    
                                                    </td>
                                                
                                            </tr>
                                            @endforeach
                                        </tboby>
                                        </table>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Esta seguro que desea eliminar este usuario?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form class="form-horizontal" role="form" method="post" action="{{ route('usuario.destroy', $user->id) }}">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input class="btn btn-danger btn-xs" type="submit" value="Delete" />
       
    </form>
        
        
      </div>
    </div>
  </div>
</div>

    @endsection