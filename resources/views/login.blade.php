@extends('plantilla')

@section('pestaña')
   Iniciar Sesión
@endsection('pestaña')

@section('section')
<h1> Iniciar Seción </h1>
<div class="container" style="margin-top:5%;">
  <div class="row justify-content-md-center">
    
      <div class="panel-heading">
      <h1 class="panel-title">Acceso a la aplicación</h1>
      </div>    
      <div class="col col-lg-2">
      
    </div>
    <div class="col-md-auto">
         <form >
            
               <div class="form-group">
                  <label for="exampleInputEmail1">Correo Electrónico:</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese un correo">
               
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword1">Contraseña:</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
               </div>
        
         <button type="submit" class="btn btn-primary btn-block">Enviar</button>
         </form>
    </div>
    <div class="col col-lg-2">  
    </div>
  </div>
</div>

@endsection('section')
