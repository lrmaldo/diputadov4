@extends('layouts.dashboardIndex')
    @section('content')

   
    @if(Session::has('message'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
	<?php $message=Session::get('message');?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<form class="form-horizontal" role="form" method="post" action="{{ route('usuario.update', $user->id) }}">
<input type="hidden" name="_method" value="PUT">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">

    


						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="name" value="{{ $user->name }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail </label>
							<div class="col-md-8">
								<input type="email" class="form-control" name="email" value="{{ $user->email }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-6 control-label">Password</label>
							<div class="col-md-8">
								<input type="password" class="form-control" name="password" >
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirmar Password</label>
							<div class="col-md-8">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Registrar
								</button>
							</div>
						</div>
					</form>





@endsection