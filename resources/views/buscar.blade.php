@extends('plantilla')

@section('pestaña')
    Buscar Espacios
@endsection('pestaña')


@section('section')

<div class="container" style="margin-top:-1.15%">
  
  </div>
  <div class="row">
  <div class="col-3" style="background-color:#B18904;">

        <div style="padding: 60% 2% 5% 4%;"> 
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <i class="fas fa-search"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="¿Qué estás buscando?" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="formulario" style="color:white; margin-left:20%;">
            <h4>Tipo de espacio</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Local comercial
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Consultorio
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Espacio en una empresa
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Bodega
                </label>
            </div><br>

            <h4>Uso al día del espacio</h4>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                Completo (8 horas)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                Medio tiempo (4 horas)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Otro
                </label>
            </div>
        </div>
  </div>
    <div class="col-9">
        <div style="margin: 3% 3% 0% 3%" >
            <h3 style="color:#B18904;">Encuentra el lugar de oficina, local comercial, bodega y consultorio que estas buscando y comparte gastos con los espacios.</h3>
            
            <div class="wrapper" style="  display: grid;   grid-template-columns: repeat(14, 1fr);   grid-gap: 10px;  grid-auto-rows: minmax(100px, auto); margin-top:3%;">
                <div class="one" style="grid-column: 1 / 5;">
                    <img src="{{ asset('images\dentista.jpg')}}" style="height:300px" class="img-thumbnail">
                </div>
                <div class="one" style="grid-column: 5/ 14; "><br>
                    <h4>Consultorio de odontología en Mazurén<h4>
                    <span style="font-size:60%;">Arriendo por horas       Espacio a compartir: 13m</span>
                    <br>
                    <p style="font-size:80%;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
                    <div style="background-color:#B18904; color:white; width:36%; padding:1%; text-align:center;" ><a href="#">Saber más</a></div>
                </div>
   
            </div>


            <div class="wrapper" style="  display: grid;   grid-template-columns: repeat(14, 1fr);   grid-gap: 10px;  grid-auto-rows: minmax(100px, auto); margin-top:3%;">
                <div class="one" style="grid-column: 1 / 5;">
                    <img src="{{ asset('images\dentista.jpg')}}" style="height:300px" class="img-thumbnail">
                </div>
                <div class="one" style="grid-column: 5/ 14; "><br>
                    <h4>Consultorio de odontología en Mazurén<h4>
                    <span style="font-size:60%;">Arriendo por horas       Espacio a compartir: 13m</span>
                    <br>
                    <p style="font-size:80%;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat </p>
                    <div style="background-color:#B18904; color:white; width:36%; padding:1%; text-align:center;" ><a href="#">Saber más</a></div>
                </div>
   
            </div><br>

            <div class="wrapper" style="  display: grid;   grid-template-columns: repeat(14, 1fr);   grid-gap: 10px;  grid-auto-rows: minmax(auto, auto); margin-top:3%;">
                <div style="grid-column: 1/ 9; ">                
                    <h3>¿No encontraste el espacio que necesitas? </h3>
                </div>
                <div style=" grid-column: 10/ 13; background-color:#B18904; color:white;  padding:1%; text-align:center;" ><h3><a href="#">Saber más</a></h3></div>
                       
        </div><div><br><br><br><br>
    </div>
    
  </div>
  <div style="width:104%; background-color:#B18904; color:white;  text-align:center; margin-left:-2%;"><h2> < 1 2 3 4 5 6 7 > </h2></div>
</div>
<br><br><br><br>

@endsection('section')
